<?php

namespace App\Http\Controllers;

use App\Order;
use App\City;
use App\Status;
use App\PaymentMethod;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $orders = Order::all();
        return view('orders.index', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $orders = Order::all();
        $cities = City::all();
        $statuses = Status::all();
        $payment_methods = PaymentMethod::all();
        return view('orders.create')->with('orders', $orders)
                                    ->with('cities', $cities)
                                    ->with('statuses', $statuses)
                                    ->with('payment_methods', $payment_methods);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $orders = new Order;
        $orders->name= $request->name;
        $orders->surname= $request->surname;
        $orders->phone_number= $request->phoneNumber;
        $orders->address= $request->address;
        $orders->cities_id= $request->city;
        $orders->product_code= $request->productCode;
        $orders->price= $request->price;
        $orders->statuses_id= $request->status;
        $orders->note= $request->note;
        $orders->payment_methods_id= $request->paymentMethod;
        $orders->control_allowed= $request->has('controlAllowed');
        $orders->payment_on_door= $request->has('paymentOnDoor');
        $orders->save();
        return redirect()->route('orders.index')->with('success', " Başarılı bir şekilde sipariş girildi.");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        $orders = Order::findOrFail($order->id);
        $cities = City::all();
        $statuses = Status::all();
        $payment_methods = PaymentMethod::all();
        return view('orders.show')->with('orders', $orders)
                                  ->with('cities', $cities)
                                  ->with('statuses', $statuses)
                                  ->with('payment_methods', $payment_methods);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        $orders = Order::findOrFail($order->id);
        $cities = City::all();
        $statuses = Status::all();
        $payment_methods = PaymentMethod::all();
        return view('orders.edit')->with('orders', $orders)
                                  ->with('cities', $cities)
                                  ->with('statuses', $statuses)
                                  ->with('payment_methods', $payment_methods);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        $orders = Order::findOrFail($order->id);
        $orders->name= $request->name;
        $orders->surname= $request->surname;
        $orders->phone_number= $request->phoneNumber;
        $orders->address= $request->address;
        $orders->cities_id= $request->city;
        $orders->product_code= $request->productCode;
        $orders->price= $request->price;
        $orders->statuses_id= $request->status;
        $orders->note= $request->note;
        $orders->payment_methods_id= $request->paymentMethod;
        $orders->control_allowed= $request->has('controlAllowed');
        $orders->payment_on_door= $request->has('paymentOnDoor');
        $orders->save();
        return redirect()->route('orders.index')->with('success', " Başarılı bir şekilde sipariş güncellendi.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
