<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function statuses()
    {
        return $this->belongsTo('App\Status');
    }
    public function payment_methods()
    {
        return $this->belongsTo('App\PaymentMethod');
    }
    public function cities()
    {
        return $this->belongsTo('App\City');
    }

    public function daily_orders()
    {
        $order = Order::whereDate('created_at', Carbon::today())->get();
        return ($order);
    }
    public function get_monthly_products($start_date=null, $end_date=null, $statuses_id=null)
    {
        $orders = $this->get_orders_custom($start_date, $end_date, $statuses_id);
        foreach ($orders as $key => $order) {
            $orders[$key]->product_code= explode('-', $order->product_code);
        }
        return ($orders);
    }
    public function get_todays_products()
    {
        $orders = $this->daily_orders();
        foreach ($orders as $key => $order) {
            $orders[$key]->product_code= explode('-', $order->product_code);
        }
        return ($orders);
    }
    public function get_orders_custom($start_date=null, $end_date=null, $statuses_id=null)
    {
        if ($start_date==null && $end_date==null &&$statuses_id==null) {
            $today = Carbon::today();
            $orders = Order::whereMonth('created_at', $today->month)->get();
        } elseif ($start_date<>null && $end_date==null && $statuses_id==null) {
            $orders = Order::whereMonth('created_at', $start_date)->get();
        } elseif ($start_date<>null && $end_date==null && $statuses_id<>null) {
            $orders = Order::whereMonth('created_at', $start_date)->where('statuses_id', $statuses_id)->get();
        } elseif ($start_date==null && $end_date==null && $statuses_id<>null) {
            $today = Carbon::today();
            $orders = Order::whereMonth('created_at', $today->month)->where('statuses_id', $statuses_id)->get();
        } elseif ($start_date<>null && $end_date<>null && $statuses_id==null) {
            $orders = Order::whereBetween('created_at', [$start_date,$end_date])->get();
        } elseif ($start_date<>null && $end_date<>null && $statuses_id<>null) {
            $orders = Order::whereBetween('created_at', [$start_date,$end_date])->where('statuses_id', $statuses_id)->get();
        }
        return ($orders);
    }
}
