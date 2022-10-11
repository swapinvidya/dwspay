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
            @livewire('counter')
 
          </div>
        </div>
      </div>
      <!--second tab-->
      <div class="tab-pane" id="profile" role="tabpanel">
        <livewire:profile-section />
      </div>
      <div class="tab-pane" id="settings" role="tabpanel">
        <livewire:profile-update />
        <hr style="border: 2px solid #3957ed;"/>
        <livewire:profile-details />
      </div>
    </div>
  </div>
  @livewireScripts