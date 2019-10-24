<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Commercial;
use Carbon\Carbon;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Order $orders)
    {
        $todays_orders = $orders->daily_orders();
        $orders_this_month = $orders->get_orders_custom();
        $orders_last_month = $orders->get_orders_custom($this->today());
        $orders_return_count = $orders_this_month->where('statuses_id', 5)->count();
        $orders_cancel_count = $orders_this_month->where('statuses_id', 3)->count();
        $orders_this_month_till_today = $orders->get_orders_custom($this->firstOfMonth(), $this->today())->count();
        $orders_last_month_till_today = $orders->get_orders_custom($this->firstOfMonth()->subMonth(), $this->today()->subMonth())->count();

        $orders_this_month_till_today_return= $orders->get_orders_custom($this->firstOfMonth(), $this->today(), 5)->count();
        $orders_last_month_till_today_return= $orders->get_orders_custom($this->firstOfMonth()->subMonth(), $this->today()->subMonth(), 5)->count();

        $orders_this_month_till_today_cancel= $orders->get_orders_custom($this->firstOfMonth(), $this->today(), 3)->count();
        $orders_last_month_till_today_cancel= $orders->get_orders_custom($this->firstOfMonth()->subMonth(), $this->today()->subMonth(), 3)->count();



        $products_this_month = $orders->get_monthly_products();
        $products_count = $this->get_products_count($products_this_month);
        $products_return_count = $this->get_products_count($products_this_month->where('statuses_id', 5));
        $products_cancel_count = $this->get_products_count($products_this_month->where('statuses_id', 3));

        $products_this_month_till_today = $this->get_products_count($orders->get_monthly_products($this->firstOfMonth(), $this->today()));
        $products_last_month_till_today = $this->get_products_count($orders->get_monthly_products($this->firstOfMonth()->subMonth(), $this->today()->subMonth()));

        $products_this_month_till_today_return = $this->get_products_count($orders->get_monthly_products($this->firstOfMonth(), $this->today(), 5));
        $products_last_month_till_today_return = $this->get_products_count($orders->get_monthly_products($this->firstOfMonth()->subMonth(), $this->today()->subMonth(), 5));

        $products_this_month_till_today_cancel = $this->get_products_count($orders->get_monthly_products($this->firstOfMonth(), $this->today(), 3));
        $products_last_month_till_today_cancel = $this->get_products_count($orders->get_monthly_products($this->firstOfMonth()->subMonth(), $this->today()->subMonth(), 3));

        $commercials = Commercial::all();
        $commercials_this_month = $commercials->whereBetween('date', [$this->firstOfMonth(), $this->today()])->sum('price');
        $commercials_last_month = $commercials->whereBetween('date', [$this->firstOfMonth()->subMonth(), $this->today()->subMonth()])->sum('price');

        $orders_havale_this_month = $orders->get_orders_custom($this->firstOfMonth(), $this->today())->where('payment_methods_id', 3)->count();
        $orders_havale_last_month = $orders->get_orders_custom($this->firstOfMonth()->subMonth(), $this->today()->subMonth())->where('payment_methods_id', 3)->count();

        $products_this_month_havale = $this->get_products_count($orders->get_monthly_products($this->firstOfMonth(), $this->today())->where('payment_methods_id', 3));
        $products_last_month_havale = $this->get_products_count($orders->get_monthly_products($this->firstOfMonth()->subMonth(), $this->today()->subMonth())->where('payment_methods_id', 3));

        return view('dashboard.index')->with('todays_orders', $todays_orders)
                                      ->with('orders_return_count', $orders_return_count)
                                      ->with('orders_cancel_count', $orders_cancel_count)
                                      ->with('orders_this_month_till_today', $orders_this_month_till_today)
                                      ->with('orders_last_month_till_today', $orders_last_month_till_today)
                                      ->with('orders_this_month_till_today_return', $orders_this_month_till_today_return)
                                      ->with('orders_last_month_till_today_return', $orders_last_month_till_today_return)
                                      ->with('orders_this_month_till_today_cancel', $orders_this_month_till_today_cancel)
                                      ->with('orders_last_month_till_today_cancel', $orders_last_month_till_today_cancel)
                                      ->with('monthly_orders', $orders_this_month)
                                      ->with('products_count', $products_count)
                                      ->with('products_return_count', $products_return_count)
                                      ->with('products_cancel_count', $products_cancel_count)
                                      ->with('products_this_month_till_today', $products_this_month_till_today)
                                      ->with('products_last_month_till_today', $products_last_month_till_today)
                                      ->with('products_this_month_till_today_return', $products_this_month_till_today_return)
                                      ->with('products_last_month_till_today_return', $products_last_month_till_today_return)
                                      ->with('products_this_month_till_today_cancel', $products_this_month_till_today_cancel)
                                      ->with('products_last_month_till_today_cancel', $products_last_month_till_today_cancel)
                                      ->with('commercials_this_month', $commercials_this_month)
                                      ->with('commercials_last_month', $commercials_last_month)
                                      ->with('orders_havale_this_month', $orders_havale_this_month)
                                      ->with('orders_havale_last_month', $orders_havale_last_month)
                                      ->with('products_this_month_havale', $products_this_month_havale)
                                      ->with('products_last_month_havale', $products_last_month_havale);
    }
    public function get_products_count($products)
    {
        $counter=0;
        foreach ($products as $product) {
            $counter+=count($product->product_code);
        }
        return $counter;
    }
    private function today()
    {
        $today = Carbon::today();
        return $today;
    }
    private function firstOfMonth()
    {
        $firstOfMonth = Carbon::today()->firstOfMonth();
        return $firstOfMonth;
    }
}
