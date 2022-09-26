
<div class="card">
    <div class="card-body bg-primary">
      <h4 class="text-white card-title">Top Users</h4>
      <h6 class="card-subtitle text-white mb-0 op-5">
        Checkout top performers here
      </h6>
    </div>
    <div class="card-body">
      <div class="message-box contact-box">
        <h2 class="add-ct-btn">
          <button
            type="button"
            class="
              btn btn-circle btn-lg btn-success
              waves-effect waves-dark
            "
          >
            +
          </button>
        </h2>
        <div class="message-widget contact-widget overflow-auto" style = "height: 375px;">
          <!-- Message -->
          @foreach ($topUsers as $item)
          @if(!in_array($item->role_id,[1,2]))
          <a class="d-flex align-items-center clicktomail" id="clicktomail{{$item->id}}" data="{{$item->id}}" data-name="{{$item->name}}" data-email="{{$item->email}}">
            <div class="user-img mb-0">
              <img
                src="./dws/assets/images/users/1.jpg"
                alt="user"
                class="img-circle"
              />
              <span class="profile-status online pull-right"></span>
            </div>
            <div class="mail-contnet" id="mail{{$item->id}}">
              <h5 class="mb-0">{{$item->name}}</h5>
              <small> {{$item->roles->rolename}} </small>
              <span class="mail-desc">{{$item->email}}</span>
            </div>
            {{-- <div class="mail-contnet" id="form{{$item->id}}" style="display: none">
                <table>
                    <tr>
                        <form>
                            <td><input type="text" class="input-sm"></td>
                            <td>
                                <button type="submit" class="btn btn-cyan btn-sm  text-white">
                                    <i class="mdi mdi-blogger"></i>
                                </button>
                            </td>
                            <td>
                                <button type="reset"  id="btn_rest{{$item->id}}" class="btn btn-danger btn-sm  text-white reset">
                                    <i class="mdi mdi-blogger"></i>
                                </button>
                            </td>
                        </form>
                    </tr>
                </table>    
            </div> --}}
          </a>
          @endif
          @endforeach
          
          
        </div>
      </div>
    </div>
</div>

