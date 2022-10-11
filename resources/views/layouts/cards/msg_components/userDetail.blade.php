@php
    $userDetails = $post->getUser;
@endphp
<div class="sl-item">
    <div class="sl-left">
      <img
        src="./dws/assets/images/users/2.jpg"
        alt="user"
        class="img-circle"
      />
    </div>
    <div class="sl-right">
      <div>
        <a href="#" class="link">{{$userDetails->name}}</a>
        <span class="sl-date">{{\Carbon\Carbon::parse($post->updated_at)->diffForHumans()}}</span>
        <div class="mt-3 row">
          <div class="col-md-3 col-xs-12">
            <img
              src="./dws/assets/images/logo/logo_low_res.png"
              alt="user"
              class="img-responsive w-100 radius"
            />
          </div>
          <div class="col-md-9 col-xs-12">
            <p>
              The {{$userDetails->roles->rolename}} {{$userDetails->name}} has succesfully updated the Mobile No And Address.
              The current email address is {{$userDetails->email}} and Mobile No is {{$userDetails->getUserDetails->mobile}}
            </p>
            <strong>Updated Address</strong>
            <address>
                {{$userDetails->getUserDetails->address}}
            </address>
            {{-- @if (Auth::user()->roles->rolename == "Admin")
            <a
              href="#"
              class="btn btn-success text-white"
            >
              Approve</a
            >
            @endif --}}
          </div>
        </div>
        {{-- <div class="like-comm mt-3">
          <a href="javascript:void(0)" class="link me-2"
            >2 comment</a
          >
          <a href="javascript:void(0)" class="link me-2"
            ><i
              class="mdi mdi-heart fs-4 text-danger"
            ></i>
            5 Love</a
          >
        </div> --}}
      </div>
    </div>
  </div>