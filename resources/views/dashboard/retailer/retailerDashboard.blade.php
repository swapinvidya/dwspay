@extends('layouts.dws')

@section('content')
<div class="container-fluid">
    <div class="row pt-2">
        <div class="col-lg-8">
            <div class="row">
                <img src="./dws/assets/images/title/dashboard.png" class = "w-100" alt="">
            </div>
            <div class="row">
                <strong class="pt-4">Your Services</strong>
            </div>
            <div class="row pt-4">
                <div class="col-12">
                    <div class="card w-100 h-auto shadow">
                        <div class="card-body">
                            <br>
                            <div class="slider1">
                                @foreach ($services as $item)
                                    @if (in_array($item->id,$subcribedServices))
                                        <div style="margin: 0 10px;"><img src="{{$item->image}}" alt="" title="{{$item->catagory}} | {{$item->Name}}"></div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>        
                </div>
            </div>
            <div class="row">
                <strong class="pt-4">Top Services</strong>
            </div>
            <div class="row pt-4">
                <div class="col-12">
                    <div class="card w-100 h-auto shadow">
                        <div class="card-body">
                            <br>
                            <div class="slider1">
                                @foreach ($services as $item)
                                    @php
                                        $icon = "";
                                        if (in_array($item->id,$subcribedServices)){
                                            $icon = "fas fa-bell fa-2x";
                                            $color = "text-danger";
                                            $link = "/services?id=".$item->id;
                                        }
                                        else{
                                            $icon = "fas fa-shopping-cart fa-2x";
                                            $color = "text-primary";
                                            $link = "/r_essential";
                                        }
                                    @endphp
                                    <div style="margin: 0 10px;  position: relative;">
                                        <img src="{{$item->image}}" alt="" title="{{$item->catagory}} | {{$item->Name}}">
                                        <i class="{{$icon}} {{$color}} " style=" position: absolute; bottom: 0; left: 0;"></i>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>        
                </div>
            </div>
        </div>
       
    
@endsection