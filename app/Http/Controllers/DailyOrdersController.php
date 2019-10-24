<?php

namespace App\Http\Controllers;

use App\Order;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DailyOrdersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Order $orders)
    {
        $daily_orders= $orders->daily_orders();
        $products_today = $orders->get_todays_products();
        $products_count = $this->get_products_count($products_today);


        return view('orders.dailyOrders')->with('orders', $daily_orders)
                                         ->with('products_count', $products_count);
    }
    public function get_products_count($products)
    {
        $counter=0;
        foreach ($products as $product) {
            $counter+=count($product->product_code);
        }
        return $counter;
    }
}
