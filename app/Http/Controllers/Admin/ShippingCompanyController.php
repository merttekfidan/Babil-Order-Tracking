<?php

namespace App\Http\Controllers;

use App\ShippingCompany;
use Illuminate\Http\Request;
use App\Http\Requests\ShippingCompanyRequest;

class ShippingCompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        $shipping_companies = ShippingCompany::all();
        return view('admin.shipping_companies.index')->with('shipping_companies', $shipping_companies);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.shipping_companies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ShippingCompanyRequest $request)
    {
        $shipping_companies = new ShippingCompany;
        $shipping_companies->shipping_company= $request->name;
        $shipping_companies->code= $request->code;
        $shipping_companies->save();
        return redirect()->route('shipping_companies.index')->with('success', " Başarılı bir şekilde kargo girildi.");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ShippingCompany  $shippingCompany
     * @return \Illuminate\Http\Response
     */
    public function show(ShippingCompany $shippingCompany)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ShippingCompany  $shippingCompany
     * @return \Illuminate\Http\Response
     */
    public function edit(ShippingCompany $shippingCompany)
    {
        $shipping_companies= ShippingCompany::findOrFail($shippingCompany->id);
        return view('admin.shipping_companies.edit')->with('shipping_companies', $shipping_companies);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ShippingCompany  $shippingCompany
     * @return \Illuminate\Http\Response
     */
    public function update(ShippingCompanyRequest $request, ShippingCompany $shippingCompany)
    {
        $shipping_companies = ShippingCompany::findOrFail($shippingCompany->id);
        $shipping_companies->shipping_company= $request->name;
        $shipping_companies->code= $request->code;
        $shipping_companies->save();
        return redirect()->route('shipping_companies.index')->with('success', " Başarılı bir şekilde kargo düzenlendi.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ShippingCompany  $shippingCompany
     * @return \Illuminate\Http\Response
     */
    public function destroy(ShippingCompany $shippingCompany)
    {
        $shipping_companies = ShippingCompany::findOrFail($shippingCompany->id);
        $shipping_companies->delete();
        return redirect()->route('shipping_companies.index')->with('success', " Başarılı bir şekilde kargo silindi.");
    }
}
