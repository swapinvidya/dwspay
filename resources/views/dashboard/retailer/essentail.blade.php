@extends('layouts.dws')

@section('content')
<div class="container-fluid">
    <div class="row pt-2">
        <div class="col-lg-8">
            <div class="row mb-3">
                <img src="./dws/assets/images/title/dashboard.png" class = "w-100" alt="">
            </div>


            <div class="bg-white rounded shadow-sm">
                <div class="container">
                    <div class="row text-center mt-4">
                        <div class="col-12 mt-2"></div>
                        @foreach ($essentailServices as $item)
                            <div class="col-xl-2 col-lg-3 col-md-3 col-sm-6 mb-3 mt-3">
                                <div class="rounded shadow-sm py-4 px-4 justify-content-center h-100 d-flex" style="background:#F6F6F6">
                                    
                                    <div class="row">
                                        @php
                                            $len = strlen($item->Name);
                                            if ($len >= 20){
                                                $words = explode(" ", $item->Name);
                                                $acronym = "";
                                                foreach ($words as $w) {
                                                $acronym .= mb_substr($w, 0, 1);
                                                }
                                            }
                                            else {
                                                $acronym = $item->Name;
                                            }
                                            
                                        @endphp 
                                        
                                        <img src="{{$item->image}}" alt="" width="150px" title="{{$item->catagory}} | {{$item->Name}}"><br>
                        
                                        <small>{{$acronym}}</small><br>
                                        <form  class="buyForm" method="POST" action="/buyService">
                                            @csrf
                                                <input type="hidden" name="id" value="{{$item->id}}">
                                            @if(in_array($item->id,$subcribedServices))
                                                <button type="button" class="btn btn-sm btn-danger disabled">Subscribed</button>
                                            @else
                                                <button type="submit" id="btn{{$item->id}}" class="btn btn-sm btn-primary">Rs {{$item->cost}}</button>
                                            @endif
                                        </form>
                                    </div>
                                    
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
       
    
@endsection

@section('script')
<script>
   
</script>

<script type="text/javascript">
    $( document ).ready(function() {
        var frm = $('.buyForm');
        var rcpt = "";
        frm.submit(function (e) {

            e.preventDefault();

            $.ajax({
                type: $(this).attr('method'),
                url: $(this).attr('action'),
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                data: $(this).serialize(),
                success: function (data) {
                    console.log(data.msg);
                    var btn = "#btn"+data.id; 
                    $(btn).removeClass("btn btn-sm btn-primary").addClass("btn btn-sm btn-danger disabled");
                    swal({ 
                             
                        title: 'Service Added Successfully!', 
                        content: {
                            element: "img",
                            attributes: {
                                        src: data.icon,
                                        width:"100",
                                        },
                                    }, 
                            text: "Name : "+data.name+" | "+data.catagory+" | cost :"+data.cost+"INR",       
                            icon: "success",       
                        });

                        document.getElementById("walbal").setAttribute('value','Wallet Balance Rs '+data.bal);
                },
                error: function (data) {
                    console.log('An error occurred.');
                    swal({
                        title: "Order Not Successfull!",
                        text: data.responseJSON.errors,
                        icon: "warning",
                        button: "Retry!",
                    });
                },
            });
        });
    });
</script>
@endsection