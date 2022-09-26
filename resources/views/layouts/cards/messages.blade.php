@livewireStyles
<div class="card">
    <!-- Nav tabs -->
    <ul class="nav nav-tabs profile-tab" role="tablist">
      <li class="nav-item">
        <a
          class="nav-link active"
          data-bs-toggle="tab"
          href="#home"
          role="tab"
          >Activity</a
        >
      </li>
      <li class="nav-item">
        <a
          class="nav-link"
          data-bs-toggle="tab"
          href="#profile"
          role="tab"
          >Profile</a
        >
      </li>
      <li class="nav-item">
        <a
          class="nav-link"
          data-bs-toggle="tab"
          href="#settings"
          role="tab"
          >Settings</a
        >
      </li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <div class="tab-pane active" id="home" role="tabpanel">
        <div class="card-body">
         
          <div class="profiletimeline border-start-0">
            <livewire:counter /> 
            <hr />
            @include('layouts.cards.msg_components.withpicandbtn')
            <hr />
            <div class="sl-item">
              <div class="sl-left">
                <img
                  src="./dws/assets/images/users/3.jpg"
                  alt="user"
                  class="img-circle"
                />
              </div>
              <div class="sl-right">
                <div>
                  <a href="#" class="link">John Doe</a>
                  <span class="sl-date">5 minutes ago</span>
                  <p class="mt-2">
                    Lorem ipsum dolor sit amet, consectetur
                    adipiscing elit. Integer nec odio. Praesent
                    libero. Sed cursus ante dapibus diam. Sed nisi.
                    Nulla quis sem at nibh elementum imperdiet. Duis
                    sagittis ipsum. Praesent mauris. Fusce nec
                    tellus sed augue semper
                  </p>
                </div>
                <div class="like-comm mt-3">
                  <a href="javascript:void(0)" class="link me-2"
                    >2 comment</a
                  >
                  <a href="javascript:void(0)" class="link me-2"
                    ><i class="mdi mdi-heart fs-4 text-danger"></i>
                    5 Love</a
                  >
                </div>
              </div>
            </div>
            <hr />
            <div class="sl-item">
              <div class="sl-left">
                <img
                  src="./dws/assets/images/users/4.jpg"
                  alt="user"
                  class="img-circle"
                />
              </div>
              <div class="sl-right">
                <div>
                  <a href="#" class="link">John Doe</a>
                  <span class="sl-date">5 minutes ago</span>
                  <blockquote class="mt-2">
                    Lorem ipsum dolor sit amet, consectetur
                    adipisicing elit, sed do eiusmod tempor
                    incididunt
                  </blockquote>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--second tab-->
      <div class="tab-pane" id="profile" role="tabpanel">
        <div class="card-body">
          <div class="row">
            <div class="col-md-3 col-xs-6 b-r">
              <strong>Full Name</strong>
              <br />
              <p class="text-muted">Johnathan Deo</p>
            </div>
            <div class="col-md-3 col-xs-6 b-r">
              <strong>Mobile</strong>
              <br />
              <p class="text-muted">(123) 456 7890</p>
            </div>
            <div class="col-md-3 col-xs-6 b-r">
              <strong>Email</strong>
              <br />
              <p class="text-muted">johnathan@admin.com</p>
            </div>
            <div class="col-md-3 col-xs-6">
              <strong>Location</strong>
              <br />
              <p class="text-muted">London</p>
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
      <div class="tab-pane" id="settings" role="tabpanel">
        <div class="card-body">
          <form class="form-horizontal form-material mx-2">
            <div class="form-group">
              <label class="col-md-12">Full Name</label>
              <div class="col-md-12">
                <input
                  type="text"
                  placeholder="Johnathan Doe"
                  class="form-control form-control-line ps-0"
                />
              </div>
            </div>
            <div class="form-group">
              <label for="example-email" class="col-md-12"
                >Email</label
              >
              <div class="col-md-12">
                <input
                  type="email"
                  placeholder="johnathan@admin.com"
                  class="form-control form-control-line ps-0"
                  name="example-email"
                  id="example-email"
                />
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-12">Password</label>
              <div class="col-md-12">
                <input
                  type="password"
                  value="password"
                  class="form-control form-control-line ps-0"
                />
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-12">Phone No</label>
              <div class="col-md-12">
                <input
                  type="text"
                  placeholder="123 456 7890"
                  class="form-control form-control-line ps-0"
                />
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-12">Message</label>
              <div class="col-md-12">
                <textarea
                  rows="5"
                  class="form-control form-control-line ps-0"
                ></textarea>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-12">Select Country</label>
              <div class="col-sm-12 border-bottom">
                <select
                  class="
                    form-select
                    shadow-none
                    border-0
                    form-control-line
                    ps-0
                  "
                >
                  <option>London</option>
                  <option>India</option>
                  <option>Usa</option>
                  <option>Canada</option>
                  <option>Thailand</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-12">
                <button class="btn btn-success text-white">
                  Update Profile
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  @livewireScripts