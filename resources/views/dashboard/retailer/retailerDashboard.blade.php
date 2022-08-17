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
                                    <div style="margin: 0 10px;"><img src="{{$item->image}}" alt="" title="{{$item->catagory}} | {{$item->Name}}"></div>
                                @endforeach
                            </div>
                        </div>
                    </div>        
                </div>
            </div>
        </div>
       
    
@endsection