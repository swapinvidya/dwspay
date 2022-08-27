@extends('layouts.dws')

@section('content')
<div class="container-fluid">
    <div class="row pt-2">
        <div class="col-lg-8">
            <div class="card rounded bg-white shadow-sm">
                <div class="container">
                    <div class="row text-left mt-4 mb-4">
                        <div class="col-2">
                            <img src="{{$service->image}}" class="image" alt="" style="width: 100px">
                        </div>
                        <div class="col-10 pt-2" style="text-decoration-color: blue">
                            <h2>{{$service->Name}}</h2>
                            <hr>
                            @php
                                $subdate = $subcribedServices_dates->where('Service_id',$service->id)->first();
                             @endphp
                            <small>Start Date : {{$subdate->Start_date}} | Exp Date : {{$subdate->Exp_date}} | Cost : {{$service->cost}} INR</small>
                        </div>
                    </div>
                </div>
            </div>
            @include('services.partials.aeps')
        </div>
@endsection
