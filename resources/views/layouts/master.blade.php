

@include('layouts.header')
@include('layouts.navbar')
<div class="wrapper">
    <div class="container-fluid">

        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="btn-group pull-right">
                        

                    </div>
                    @yield('content')
                </div>
            </div>
        </div>
        <!-- end page title end breadcrumb -->

    </div> <!-- end container -->
</div>
@include('layouts.footer')
