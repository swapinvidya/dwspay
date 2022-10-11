<div>
    <div>
        <div class="card-body">
            <form class="form-horizontal form-material mx-2" wire:submit.prevent="update">
                <div class="form-group">
                    <h4>Contact Details</h4>
                </div>
                <input type="hidden" wire:model="user_id">
              <div class="form-group">
                <label class="col-md-12">Phone No</label>
                <div class="col-md-12">
                  <input
                    type="text"
                    placeholder="{{(Auth::user()->getUserDeails) ? Auth::user()->getUserDeails->mobile : null }}"
                    class="form-control form-control-line ps-0"
                    wire:model="mobile"
                  />
                  @error('mobile') <span class="error">{{ $message }}</span> @enderror
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-12">Address</label>
                <div class="col-md-12">
                    <textarea
                        rows="5"
                        class="form-control form-control-line ps-0"
                        wire:model="address"
                    >
                    {{(Auth::user()->getUserDeails) ? Auth::user()->getUserDeails->address : null }}
                    </textarea>
                    @error('address') <span class="error">{{ $message }}</span> @enderror
                </div>
              </div>
              {{-- <div class="form-group">
                <label class="col-sm-12">Country</label>
                <div class="col-sm-12 border-bottom">
                  <select
                    class="
                      form-select
                      shadow-none
                      border-0
                      form-control-line
                      ps-0
                    "
                    wire:model.defer="userDetail.email"
                  >
                    <option>London</option>
                    <option>India</option>
                    <option>Usa</option>
                    <option>Canada</option>
                    <option>Thailand</option>
                  </select>
                </div>
              </div> --}}
              <div class="form-group">
                <div class="col-sm-12">
                  <button class="btn btn-success text-white">
                    Update
                  </button>
                </div>
              </div>
            </form>
        </div>
    </div>    
</div>
