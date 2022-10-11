<div>
    <div class="card-body">
        <form class="form-horizontal form-material mx-2" wire:submit.prevent="update">
            <div class="form-group">
                <h4>Basic Registration Details</h4>
            </div>
          <div class="form-group">
            <label class="col-md-12">Full Name</label>
            <div class="col-md-12">
              <input
                type="text"
                placeholder="{{Auth::user()->name}}"
                class="form-control form-control-line ps-0"
                wire:model="name"
              />
              @error('name') <span class="error">{{ $message }}</span> @enderror
            </div>
          </div>
          <div class="form-group">
            <label for="example-email" class="col-md-12"
              >Email</label
            >
            <div class="col-md-12">
              <input
                type="email"
                placeholder="{{Auth::user()->email}}"
                class="form-control form-control-line ps-0"
                name="example-email"
                id="example-email"
                wire:model="email"
              />
              @error('email') <span class="error">{{ $message }}</span> @enderror
            </div>
          </div>
          {{-- <div class="form-group">
            <label class="col-md-12">Password</label>
            <div class="col-md-12">
              <input
                type="password"
                value="password"
                class="form-control form-control-line ps-0"
              />
            </div>
          </div> --}}
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
