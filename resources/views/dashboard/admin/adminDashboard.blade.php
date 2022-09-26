@extends('layouts.dws')

@section('content')
<div class="container-fluid">
    <div class="row pt-2">
        @if(Auth::user()->roles->rolename !== "Admin")
        <div class="col-lg-8">
        @else
        <div class="col-12">
        @endif
            <div class="row">
                <img src="./dws/assets/images/title/dashboard_admin.png" class = "w-100" alt="">
            </div>
          <!-- ============================================================== -->
          <!-- Sales chart -->
          <!-- ============================================================== -->
          <div class="row mt-3">
            <!-- Column -->
            <div class="col-lg-7">
                @include('layouts.cards.saleschart')
            </div>
            <div class="col-lg-5">
                @include('layouts.cards.userschart')
            </div>
          </div>
          <!-- ============================================================== -->
          <!-- Sales chart Ends -->
          <!-- ============================================================== -->

          
          <div class="row">
          <!-- ============================================================== -->
          <!-- Top Users  -->
          <!-- ============================================================== -->
                <div class="col-lg-4">
                    <div class="row">
                        <div class="col-12">
                            @include('layouts.cards.topusers')
                        </div>
                    </div>
            <!-- ============================================================== -->
            <!-- Top Users End -->
            <!-- ============================================================== -->
                    <div class="row">
            <!-- ============================================================== -->
            <!-- Top Tx -->
            <!-- ============================================================== -->
                    <div class="col-12">
                        @include('layouts.cards.toptransactions')
                    </div>
            <!-- ============================================================== -->
            <!-- Top Tx End-->
            <!-- ============================================================== -->
                    </div>
                </div>
          

          <!-- ============================================================== -->
          <!-- Messages  -->
          <!-- ============================================================== -->
                <div class="col-lg-8">
                        @include('layouts.cards.messages')
                    
                </div>
          <!-- ============================================================== -->
          <!-- Messages Ends -->
          <!-- ============================================================== -->
          </div>
         

           
        </div>

@endsection

@section('script')

<script>
$('.clicktomail').on("click",function(){
    var data_id = $(this).attr('data');
    var data_name =  $(this).attr('data-name');
    var data_email =  $(this).attr('data-email');
    swal({
    text: "Send Mail to "+data_name,
    content: "input",
        button: {
            text: "Send!",
            closeModal: false,
        },
    })
    .then(name => {
        if (!name) throw null;
            return fetch(`/sendAdminmail?user_id=`+data_id+"&body="+name);
        })
    .then(results => {
        return results.json();

    })
    .then(json => {

        var msg = json.message;
        var ok = json.success;
        
        if (!ok) {
            return swal("Email Failed Please Retry!");
        }
        
    
    swal({
        title: "Mail Send Successfully",
        text: msg,
        icon: "success",
    });
    })
    .catch(err => {
        if (err) {
            console.log(err);
            swal("Oh noes!", "The AJAX request failed!", "error");
        } else {
            swal.stopLoading();
            swal.close();
        }
    });
  })
</script>

<script type="text/javascript">
    $( document ).ready(function() {
        var frm = $('#fcf-form-id');
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