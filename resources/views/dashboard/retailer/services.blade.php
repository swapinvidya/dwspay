@extends('layouts.dws')

@section('content')
<div class="container-fluid">
    <div class="row pt-2">
        <div class="col-lg-8">
            <div class="row">
                <img src="./dws/assets/images/title/dashboard.png" class = "w-100" alt="">
            </div>
            <div class="row">
                service
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card w-100">
                <div class="card-body text-center">
                    <div class="profile-pic mb-3 mt-3">
                        <img src="./dws/assets/images/users/2.jpg" width="100" class="rounded-circle" alt="user" />
                        <h4 class="mt-3 mb-0">{{Auth::user()->name}}</h4>
                        <strong>{{Auth::user()->roles->rolename}}</strong><br>
                        @if (Auth::user()->roles->rolename !== "Admin" )
                        <button class="btn btn-primary btn-sm">Upgrade</button>
                        @endif
                    </div>
                    <!--calander-->
                    <div class="calendar-container"></div>
                    <!--Calander Ends-->
                    <!--Location-->
                    <div class="pt-3 pb-3">
                        <strong >Location</strong>
                    </div>
                    <div id="map"></div>
                    <!--Location Ends-->
                </div>
                <div class="p-4 border-top mt-3">
                    <div class="row text-center">
                        <div class="col-6 border-end">
                            <a href="#" class="link d-flex align-items-center justify-content-center font-weight-medium"><i class="mdi mdi-message fs-6 me-1"></i>Message</a>
                        </div>
                        <div class="col-6">
                            <a href="#" class="link d-flex align-items-center justify-content-center font-weight-medium"><i class="mdi mdi-developer-board fs-6 me-1"></i>Portfolio</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
      //
    </div>
</div>
    
@endsection