@extends('layouts.dws')

@section('content')
<div class="container-fluid">
    <div class="row pt-2">
        <div class="col-lg-8">
            <div class="row">
                <img src="./dws/assets/images/title/dashboard.png" class = "w-100" alt="">
            </div>
            <div class="bg-white rounded shadow-sm">
                <div class="container">
                    <div class="row text-center mt-4">
                        <div class="col-12 mt-2 mb-2"></div>
                        @foreach ($myServices as $item)
                            <div class="col-xl-2 col-lg-3 col-md-3 col-sm-6 mb-3 mt-3">
                                <div class="rounded shadow-sm py-4 px-4 justify-content-center h-100 d-flex" style="background:#F6F6F6">
                                    <div class="row">
                                        <a href="/services?id={{$item->id}}">
                                            <img src="{{$item->image}}" alt="" width="150px" title="{{$item->catagory}} | {{$item->Name}}"><br>
                                            <small>{{$item->Name}}</small>
                                        </a><br>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="bg-white rounded shadow-sm">
                <div class="container">
                    <div class="row mt-4">
                        <div class="col-12 mt-4 mb-4">
                            <table id="table_id" class="display">
                                <thead>
                                    <tr>
                                        <th>Sl No</th>
                                        <th>Name</th>
                                        <th>Catogary</th>
                                        <th>Subscribed On</th>
                                        <th>Days Left</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($myServices as $item)
                                        <tr>
                                            <td>
                                                {{$item->id}}.
                                                <img src="{{$item->image}}" alt="" width="40px">
                                            </td>
                                            <td>{{$item->Name}}</td>
                                            <td>{{$item->catagory}}</td>
                                            @php
                                                $subdate = $subcribedServices_dates->where('Service_id',$item->id)->first();
                                            @endphp
                                            <td>
                                               {{$subdate->Start_date}}
                                            </td>
                                            <td> {{\Carbon\Carbon::parse($subdate->Exp_date)->longAbsoluteDiffForHumans()}}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
@section('script')
    <script>
        $(document).ready( function () {
            $('#table_id').DataTable();
        } );
    </script>
@endsection