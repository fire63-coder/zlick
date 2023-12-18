@extends('customer.layout.main')
@section('content')
    <!-- start page content -->
    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="user-sidebar">
                        @include('customer.layout.dashboard_menu')
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="user-content">
                        <h3 class="text-center">
                            Welcome to the Dashboard
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end page content -->
@stop
