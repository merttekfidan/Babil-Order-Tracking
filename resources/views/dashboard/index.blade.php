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
                            @elseif(intval((($orders_this_month_till_today/$orders_last_month_till_today)-1)*100)<0)
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
                        @php
                          $total_this_month= $orders_this_month_till_today-($orders_this_month_till_today_return+$orders_this_month_till_today_cancel);
                          $total_last_month= $orders_last_month_till_today-($orders_last_month_till_today_return+$orders_last_month_till_today_cancel);
                        @endphp
                          <span class="counter text-white">{{$total_this_month}}</span>
                          Bu ay tamamlanan
                      </div>
                      <p class="mb-0 m-t-20 text-light">Geçen ay tamamlanan {{$total_last_month}}
                        <span class="pull-right">
                          @if($total_this_month<>0 && $total_last_month<>0)
                            @if(intval((($total_this_month/$total_last_month)-1)*100)>0)
                              <i class="fa fa-caret-up m-r-5"></i>
                            @elseif(intval((($total_this_month/$total_last_month)-1)*100)<0)
                              <i class="fa fa-caret-down m-r-5"></i>
                            @endif
                            {{intval((($total_this_month/$total_last_month)-1)*100)}}%
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
                          <span class="counter text-white">{{$orders_this_month_till_today_cancel}}</span>
                          Bu ayın iptalleri
                      </div>
                      <p class="mb-0 m-t-20 text-light">Geçen ayın iptalleri {{$orders_last_month_till_today_cancel}}
                        <span class="pull-right">
                          @if($orders_last_month_till_today_cancel<>0 && $orders_this_month_till_today_cancel<>0)
                            @if(intval((($orders_this_month_till_today_cancel/$orders_last_month_till_today_cancel)-1)*100)>0)
                              <i class="fa fa-caret-up m-r-5"></i>
                            @elseif(intval((($orders_this_month_till_today_cancel/$orders_last_month_till_today_cancel)-1)*100)<0)
                              <i class="fa fa-caret-down m-r-5"></i>
                            @endif
                            {{intval((($orders_this_month_till_today_cancel/$orders_last_month_till_today_cancel)-1)*100)}}%
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
                            @elseif(intval((($products_this_month_till_today/$products_last_month_till_today)-1)*100)<0)
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
                        @php
                          $total_this_month= $products_this_month_till_today-($products_this_month_till_today_return+$products_this_month_till_today_cancel);
                          $total_last_month= $products_last_month_till_today-($products_last_month_till_today_return+$products_last_month_till_today_cancel);
                        @endphp
                          <span class="counter text-white">{{$total_this_month}}</span>
                          Bu ay tamamlanan
                      </div>
                      <p class="mb-0 m-t-20 text-light">Geçen ay tamamlanan {{$total_last_month}}
                        <span class="pull-right">
                          @if($total_this_month<>0 && $total_last_month<>0)
                            @if(intval((($total_this_month/$total_last_month)-1)*100)>0)
                              <i class="fa fa-caret-up m-r-5"></i>
                            @elseif(intval((($total_this_month/$total_last_month)-1)*100)<0)
                              <i class="fa fa-caret-down m-r-5"></i>
                            @endif
                            {{intval((($total_this_month/$total_last_month)-1)*100)}}%
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
                          <span class="counter text-white">{{$products_this_month_till_today_cancel}}</span>
                          Bu ayın iptalleri
                      </div>
                      <p class="mb-0 m-t-20 text-light">Geçen ayın iptalleri {{$products_last_month_till_today_cancel}}
                        <span class="pull-right">
                          @if($products_last_month_till_today_cancel<>0 && $products_this_month_till_today_cancel<>0)
                            @if(intval((($products_this_month_till_today_cancel/$products_last_month_till_today_cancel)-1)*100)>0)
                              <i class="fa fa-caret-up m-r-5"></i>
                            @elseif(intval((($products_this_month_till_today_cancel/$products_last_month_till_today_cancel)-1)*100)<0)
                              <i class="fa fa-caret-down m-r-5"></i>
                            @endif
                            {{intval((($products_this_month_till_today_cancel/$products_last_month_till_today_cancel)-1)*100)}}%
                          @endif
                        </span></p>
                  </div>
              </div>
          </div>
          <div class="row">
              <div class="col-md-6">
                  <div class="card m-b-30">
                      <div class="card-body">
                          <h4 class="mt-0 header-title">Email Sent</h4>

                          <ul class="list-inline widget-chart m-t-20 text-center">
                              <li>
                                  <h4 class=""><b>3652</b></h4>
                                  <p class="text-muted m-b-0">Marketplace</p>
                              </li>
                              <li>
                                  <h4 class=""><b>5421</b></h4>
                                  <p class="text-muted m-b-0">Last week</p>
                              </li>
                              <li>
                                  <h4 class=""><b>9652</b></h4>
                                  <p class="text-muted m-b-0">Last Month</p>
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
                                  <h4 class="" id="iptalSiparis"><b>{{$orders_cancel_count}}</b></h4>
                                  <p class="text-muted m-b-0">İptaller</p>
                              </li>
                          </ul>
                          <hr/>
                          <h4 class="mt-0 header-title">Aylık Ürün Hareket Dökümü</h4>
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
                                  <h4 class=""><b>{{$products_cancel_count}}</b></h4>
                                  <p class="text-muted m-b-0">İptaller</p>
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
