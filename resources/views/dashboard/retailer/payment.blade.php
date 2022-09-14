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
                    <div class="row mt-4">
                        <div class="col-12 mt-4 mb-4">
                            
                            <table id="table_id" class="display">
                                <thead>
                                    <tr>
                                        <th>Sl No</th>
                                        <th>Type</th>
                                        <th>Description</th>
                                        <th>Confirmed</th>
                                        <th>Amount</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach (Auth::user()->transactions as $item)
                                        @php
                                            $meta = "No Data";
                                            if (json_encode($item->meta) != "null"){
                                                    $meta = json_decode(json_encode($item->meta));
                                                    $meta = $meta->title;
                                                }
                                        @endphp
                                        <tr>
                                            <td>
                                                {{$item->id}}.
                                                <img src="{{$item->image}}" alt="" width="40px">
                                            </td>
                                            <td>
                                                @if($item->type == 'withdraw')
                                                <i class='fa fa-download text-blue'></i>
                                                @else
                                                <i class='fa fa-upload text-cyan'></i>
                                                @endif
                                                &nbsp;{{$item->type}}
                                            </td>
                                            <td>{{$meta}}</td>
                                            <td>
                                                @if ($item->confirmed)
                                                    <a class="btn btn-primary btn-sm" href="/serviceRecpt?id={{Auth::id()}}&tx={{$item->uuid}}">
                                                        <i class="fa fa-check"></i>&nbsp;Receipt
                                                    </a>
                                                @else
                                                <i class="fa fa-hour-glass"></i>
                                                @endif
                                            </td>
                                            <td>{{$item->amount}}</td>
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
{{-- Datatable --}}
    <script>
        $(document).ready( function () {
            $('#table_id').DataTable();
        } );
    </script>
@endsection