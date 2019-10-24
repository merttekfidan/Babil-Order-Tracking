@extends('layouts.master')
@section('title')
Test
@endsection

@section('content')
@include('layouts._alert')




<!-- Page-Title -->
<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <div class="btn-group pull-right">
                <ol class="breadcrumb hide-phone p-0 m-0">
                    <li class="breadcrumb-item"><a href="#">Upcube</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div>
            <h4 class="page-title">Dashboard</h4>
        </div>
    </div>
</div>
<!-- end page title end breadcrumb -->


<div class="row">
    <div class="col-md-6 col-xl-3">
        <div class="mini-stat clearfix bg-white">
            <span class="mini-stat-icon bg-light"><i class="mdi mdi-cart-outline text-danger"></i></span>
            <div class="mini-stat-info text-right text-muted">
                <span class="counter text-danger">{{$orders_this_month_till_today}}</span>
                Bu ayın siparişleri
            </div>
            <p class="mb-0 m-t-20 text-muted">Geçen ayın siparişleri : {{$orders_last_month_till_today}}
                <span class="pull-right">
                    @if($orders_last_month_till_today<>0 && $orders_this_month_till_today<>0)
                            @if(intval((($orders_this_month_till_today/$orders_last_month_till_today)-1)*100)>0)
                            <i class="fa fa-caret-up m-r-5"></i>
                            @elseif(intval((($orders_this_month_till_today/$orders_last_month_till_today)-1)*100) <0)
                               <i class="fa fa-caret-down m-r-5"></i>
                            @endif
                            {{intval((($orders_this_month_till_today/$orders_last_month_till_today)-1)*100)}}%
                            @endif
                </span></p>
        </div>
    </div>
    <div class="col-md-6 col-xl-3">
        <div class="mini-stat clearfix bg-success">
            <span class="mini-stat-icon bg-light"><i class="mdi mdi-currency-usd text-success"></i></span>
            <div class="mini-stat-info text-right text-white">
                <span class="counter text-white">{{$commercials_this_month}}</span>
                Bu ay reklam gideri
            </div>
            <p class="mb-0 m-t-20 text-light">Geçen ay reklam gideri : {{$commercials_last_month}}
                <span class="pull-right">
                  @if($commercials_this_month<>0 && $commercials_last_month<>0)
                            @if(intval((($commercials_this_month/$commercials_last_month)-1)*100)>0)
                            <i class="fa fa-caret-up m-r-5"></i>
                            @elseif(intval((($commercials_this_month/$commercials_last_month)-1)*100)<0) <i class="fa fa-caret-down m-r-5"></i>
                                @endif
                                {{intval((($commercials_this_month/$commercials_last_month)-1)*100)}}%
                                @endif
                </span></p>
        </div>
    </div>
    <div class="col-md-6 col-xl-3">
        <div class="mini-stat clearfix bg-white">
            <span class="mini-stat-icon bg-light"><i class="mdi mdi-cube-outline text-warning"></i></span>
            <div class="mini-stat-info text-right text-muted">
                <span class="counter text-warning">{{$orders_this_month_till_today_return}}</span>
                Bu ayın iadeleri
            </div>
            <p class="mb-0 m-t-20 text-muted">Geçen ayın iadeleri {{$orders_last_month_till_today_return}}
                <span class="pull-right">
                    @if($orders_last_month_till_today_return<>0 && $orders_this_month_till_today_return<>0)
                            @if(intval((($orders_this_month_till_today_return/$orders_last_month_till_today_return)-1)*100)>0)
                            <i class="fa fa-caret-up m-r-5"></i>
                            @elseif(intval((($orders_this_month_till_today_return/$orders_last_month_till_today_return)-1)*100)<0)
                              <i class="fa fa-caret-down m-r-5"></i>
                                @endif
                                {{intval((($orders_this_month_till_today_return/$orders_last_month_till_today_return)-1)*100)}}%
                                @endif
                </span></p>
        </div>
    </div>
    <div class="col-md-6 col-xl-3">
        <div class="mini-stat clearfix bg-info">
            <span class="mini-stat-icon bg-light"><i class="mdi mdi-currency-btc text-info"></i></span>
            <div class="mini-stat-info text-right text-light">
                <span class="counter text-white">{{$orders_havale_this_month}}</span>
                Bu ayın havaleleri
            </div>
            <p class="mb-0 m-t-20 text-light">Geçen ayın havaleleri {{$orders_havale_last_month}}
                <span class="pull-right">
                    @if($orders_havale_this_month<>0 && $orders_havale_last_month<>0)
                            @if(intval((($orders_havale_this_month/$orders_havale_last_month)-1)*100)>0)
                            <i class="fa fa-caret-up m-r-5"></i>
                            @elseif(intval((($orders_havale_this_month/$orders_havale_last_month)-1)*100)<0) <i class="fa fa-caret-down m-r-5"></i>
                                @endif
                                {{intval((($orders_havale_this_month/$orders_havale_last_month)-1)*100)}}%
                                @endif
                </span></p>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6 col-xl-3">
        <div class="mini-stat clearfix bg-white">
            <span class="mini-stat-icon bg-light"><i class="mdi mdi-cart-outline text-danger"></i></span>
            <div class="mini-stat-info text-right text-muted">
                <span class="counter text-danger">{{$products_this_month_till_today}}</span>
                Bu ayın ürünleri
            </div>
            <p class="mb-0 m-t-20 text-muted">Geçen ayın ürünleri : {{$products_last_month_till_today}}
                <span class="pull-right">
                    @if($products_last_month_till_today<>0 && $products_this_month_till_today<>0)
                            @if(intval((($products_this_month_till_today/$products_last_month_till_today)-1)*100)>0)
                            <i class="fa fa-caret-up m-r-5"></i>
                            @elseif(intval((($products_this_month_till_today/$products_last_month_till_today)-1)*100) <0)
                            <i class="fa fa-caret-down m-r-5"></i>
                            @endif
                            {{intval((($products_this_month_till_today/$products_last_month_till_today)-1)*100)}}%
                            @endif
                </span></p>
        </div>
    </div>
    <div class="col-md-6 col-xl-3">
        <div class="mini-stat clearfix bg-success">
            <span class="mini-stat-icon bg-light"><i class="mdi mdi-currency-usd text-success"></i></span>
            <div class="mini-stat-info text-right text-white">
                <span class="counter text-white">{{$commercials_this_month}}</span>
                Bu ay reklam gideri
            </div>
            <p class="mb-0 m-t-20 text-light">Geçen ay reklam gideri : {{$commercials_last_month}}
                <span class="pull-right">
                    @if($commercials_this_month<>0 && $commercials_last_month<>0)
                            @if(intval((($commercials_this_month/$commercials_last_month)-1)*100)>0)
                            <i class="fa fa-caret-up m-r-5"></i>
                            @elseif(intval((($commercials_this_month/$commercials_last_month)-1)*100)<0)
                              <i class="fa fa-caret-down m-r-5"></i>
                                @endif
                                {{intval((($commercials_this_month/$commercials_last_month)-1)*100)}}%
                                @endif
                </span></p>
        </div>
    </div>
    <div class="col-md-6 col-xl-3">
        <div class="mini-stat clearfix bg-white">
            <span class="mini-stat-icon bg-light"><i class="mdi mdi-cube-outline text-warning"></i></span>
            <div class="mini-stat-info text-right text-muted">
                <span class="counter text-warning">{{$products_this_month_till_today_return}}</span>
                Bu ayın iadeleri
            </div>
            <p class="mb-0 m-t-20 text-muted">Geçen ayın iadeleri {{$products_last_month_till_today_return}}
                <span class="pull-right">
                    @if($products_last_month_till_today_return<>0 && $products_this_month_till_today_return<>0)
                            @if(intval((($products_this_month_till_today_return/$products_last_month_till_today_return)-1)*100)>0)
                            <i class="fa fa-caret-up m-r-5"></i>
                            @elseif(intval((($products_this_month_till_today_return/$products_last_month_till_today_return)-1)*100)<0)
                              <i class="fa fa-caret-down m-r-5"></i>
                            @endif
                                {{intval((($products_this_month_till_today_return/$products_last_month_till_today_return)-1)*100)}}%
                    @endif
                </span></p>
        </div>
    </div>
    <div class="col-md-6 col-xl-3">
        <div class="mini-stat clearfix bg-info">
            <span class="mini-stat-icon bg-light"><i class="mdi mdi-currency-btc text-info"></i></span>
            <div class="mini-stat-info text-right text-light">
                <span class="counter text-white">{{$products_this_month_havale}}</span>
                Bu ayın havaleleri
            </div>
            <p class="mb-0 m-t-20 text-light">Geçen ayın havaleleri {{$products_last_month_havale}}
                <span class="pull-right">
                    @if($products_this_month_havale<>0 && $products_last_month_havale<>0)
                            @if(intval((($products_this_month_havale/$products_last_month_havale)-1)*100)>0)
                            <i class="fa fa-caret-up m-r-5"></i>
                            @elseif(intval((($products_this_month_havale/$products_last_month_havale)-1)*100)<0)
                              <i class="fa fa-caret-down m-r-5"></i>
                                @endif
                                {{intval((($products_this_month_havale/$products_last_month_havale)-1)*100)}}%
                                @endif
                </span></p>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="card m-b-30">
            <div class="card-body">
                <h4 class="mt-0 header-title">Reklam gideri</h4>

                <ul class="list-inline widget-chart m-t-20 text-center">
                    <li>
                        <h4 class=""><b>{{$products_count}}</b></h4>
                        <p class="text-muted m-b-0">Bu ay satılan ürün</p>
                    </li>
                    <li>
                        <h4 class=""><b>{{$commercials_this_month}}</b></h4>
                        <p class="text-muted m-b-0">Bu ay reklam gideri</p>
                    </li>
                    <li>
                        <h4 class=""><b>
                          @if($products_count<>0 && $commercials_this_month<>0)
                            {{ intval($commercials_this_month/$products_count) }}
                          @endif
                        </b></h4>
                        <p class="text-muted m-b-0">Ürün başı reklam gideri </p>
                    </li>
                </ul>

                <div id="morris-area-example" style="height: 300px"></div>
            </div>
        </div>
    </div>


    <div class="col-md-6">
        <div class="card m-b-30">
            <div class="card-body">
                <h4 class="mt-0 header-title">Aylık Sipariş Dökümü</h4>
                <ul class="list-inline widget-chart m-t-20 text-center">
                    <li style="width: 22.5%;">
                        <h4 class="" id="topSiparis" value="20"><b id>{{$monthly_orders->count()}}</b></h4>
                        <p class="text-muted m-b-0">Toplam Sipariş</p>
                    </li>
                    <li style="width: 22.5%;">
                        <h4 class="" id="tamamlananSiparis"><b>{{$monthly_orders->count()-($orders_return_count+$orders_cancel_count)}}</b></h4>
                        <p class="text-muted m-b-0">Tamamlanan</p>
                    </li>
                    <li style="width: 22.5%;">
                        <h4 class="" id="iadeSiparis"><b>{{$orders_return_count}}</b></h4>
                        <p class="text-muted m-b-0">İadeler</p>
                    </li>
                    <li style="width: 22.5%;">
                        <h4 class="" id="iptalSiparis"><b>{{$orders_havale_this_month}}</b></h4>
                        <p class="text-muted m-b-0">Havaleler</p>
                    </li>
                </ul>
                <hr> <h4 class="mt-0 header-title">Aylık Ürün Hareket Dökümü</h4>
                <ul class="list-inline widget-chart m-t-20 text-center">
                    <li style="width: 22.5%;">
                        <h4 class=""><b>{{$products_count}}</b></h4>
                        <p class="text-muted m-b-0">Toplam Ürün</p>
                    </li>
                    <li style="width: 22.5%;">
                        <h4 class=""><b>{{$products_count-($products_return_count+$products_cancel_count)}}</b></h4>
                        <p class="text-muted m-b-0">Tamamlanan</p>
                    </li>
                    <li style="width: 22.5%;">
                        <h4 class=""><b>{{$products_return_count}}</b></h4>
                        <p class="text-muted m-b-0">İadeler</p>
                    </li>
                    <li style="width: 22.5%;">
                        <h4 class=""><b>{{$products_this_month_havale}}</b></h4>
                        <p class="text-muted m-b-0">Havaleler</p>
                    </li>
                </ul>
                <div id="donut-example"></div>
            </div>
        </div>
    </div>


</div>

<div class="row">

    <div class="col-xl-8">
        <div class="card m-b-30">
            <div class="card-body">
                <h4 class="mt-0 m-b-15 header-title">Bugünün siparişleri</h4>

                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead>
                            <tr>
                                <th>Ad Soyad</th>
                                <th>Telefon</th>
                                <th>Fiyat</th>
                                <th>Durum</th>
                                <th>Şehir</th>
                                <th>Ödeme Türü</th>
                            </tr>

                        </thead>
                        <tbody>
                            @foreach ($todays_orders as $todays_order)
                            <tr>
                                <td>{{$todays_order->name}}</td>
                                <td>{{$todays_order->phone_number}}</td>
                                <td>{{$todays_order->price}}</td>
                                <td>{{$todays_order->statuses->status}}</td>
                                <td>{{$todays_order->cities->city_name}}</td>
                                <td>{{$todays_order->payment_methods->method_name}}</td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>

    <div class="col-xl-4">
        <div class="card m-b-30">
            <div class="card-body">
                <h4 class="mt-0 header-title">Revenue</h4>

                <ul class="list-inline widget-chart m-t-20 text-center">
                    <li>
                        <h4 class=""><b>5248</b></h4>
                        <p class="text-muted m-b-0">Marketplace</p>
                    </li>
                    <li>
                        <h4 class=""><b>321</b></h4>
                        <p class="text-muted m-b-0">Last week</p>
                    </li>
                    <li>
                        <h4 class=""><b>964</b></h4>
                        <p class="text-muted m-b-0">Last Month</p>
                    </li>
                </ul>

                <div id="morris-bar-example" style="height: 300px"></div>
            </div>
        </div>
    </div>

</div>
<!-- end row -->

@endsection
