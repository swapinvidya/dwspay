<div>
    <div class="card-body">
        <div class="row">
          <div class="col-md-3 col-xs-6 b-r">
            <strong>Full Name</strong>
            <br />
            <p class="text-muted">{{Auth::user()->name}}</p>
          </div>
          <div class="col-md-3 col-xs-6 b-r">
            <strong>Mobile</strong>
            <br />
            @if (Auth::user()->getUserDetails == null)
            <p class="text-muted">Nodata</p>
            @else
            <p class="text-muted">{{Auth::user()->getUserDetails->mobile}}</p>
            @endif
          </div>
          <div class="col-md-3 col-xs-6 b-r">
            <strong>Email</strong>
            <br />
            <p class="text-muted"><small>{{Auth::user()->email}}</small></p>
          </div>
          <div class="col-md-3 col-xs-6">
            <strong>Location</strong>
            <br />
            @if (Auth::user()->getUserDetails == null)
            <p class="text-muted">Nodata</p>
            @else
            <p class="text-muted">{{Auth::user()->getUserDetails->location}}</p>
            @endif
          </div>
        </div>
        <hr />
        <p class="mt-4">
          Donec pede justo, fringilla vel, aliquet nec, vulputate
          eget, arcu. In enim justo, rhoncus ut, imperdiet a,
          venenatis vitae, justo. Nullam dictum felis eu pede
          mollis pretium. Integer tincidunt.Cras dapibus. Vivamus
          elementum semper nisi. Aenean vulputate eleifend tellus.
          Aenean leo ligula, porttitor eu, consequat vitae,
          eleifend ac, enim.
        </p>
        <p>
          Lorem Ipsum is simply dummy text of the printing and
          typesetting industry. Lorem Ipsum has been the
          industry's standard dummy text ever since the 1500s,
          when an unknown printer took a galley of type and
          scrambled it to make a type specimen book. It has
          survived not only five centuries
        </p>
        <p>
          It was popularised in the 1960s with the release of
          Letraset sheets containing Lorem Ipsum passages, and
          more recently with desktop publishing software like
          Aldus PageMaker including versions of Lorem Ipsum.
        </p>
        <h4 class="font-medium mt-4">Skill Set</h4>
        <hr />
        <h5 class="d-flex mt-4">
          Wordpress <span class="ms-auto">80%</span>
        </h5>
        <div class="progress">
          <div
            class="progress-bar bg-success"
            role="progressbar"
            aria-valuenow="80"
            aria-valuemin="0"
            aria-valuemax="100"
            style="width: 80%; height: 6px"
          >
            <span class="sr-only">50% Complete</span>
          </div>
        </div>
        <h5 class="d-flex mt-4">
          HTML 5 <span class="ms-auto">90%</span>
        </h5>
        <div class="progress">
          <div
            class="progress-bar bg-info"
            role="progressbar"
            aria-valuenow="90"
            aria-valuemin="0"
            aria-valuemax="100"
            style="width: 90%; height: 6px"
          >
            <span class="sr-only">50% Complete</span>
          </div>
        </div>
        <h5 class="d-flex mt-4">
          jQuery <span class="ms-auto">50%</span>
        </h5>
        <div class="progress">
          <div
            class="progress-bar bg-danger"
            role="progressbar"
            aria-valuenow="50"
            aria-valuemin="0"
            aria-valuemax="100"
            style="width: 50%; height: 6px"
          >
            <span class="sr-only">50% Complete</span>
          </div>
        </div>
        <h5 class="d-flex mt-4">
          Photoshop <span class="ms-auto">70%</span>
        </h5>
        <div class="progress">
          <div
            class="progress-bar bg-warning"
            role="progressbar"
            aria-valuenow="70"
            aria-valuemin="0"
            aria-valuemax="100"
            style="width: 70%; height: 6px"
          >
            <span class="sr-only">50% Complete</span>
          </div>
        </div>
    </div>
    
</div>
