  <header id="page-topbar" style="background-color:#28357b;">
      <div class="navbar-header">
          <div class="d-flex">
              <!-- LOGO -->
              <div class="navbar-brand-box" >
                  <a href="{{ url('/dashboard') }}" class="logo logo-dark">
                      <span class="logo-sm" style="margin-left: -20px;">
                          <img src="{{ asset('backend/assets/images/prog.png') }}" alt="logo-sm" width="150px;">
                      </span>
                      <span class="logo-lg">
                          <img src="{{ asset('backend/assets/images/proglogo.png') }}" alt="logo-dark" width="150px;">
                      </span>
                  </a>

                  <a href="{{ url('/dashboard') }}" class="logo logo-light">
                      <span class="logo-sm" style="margin-left: -20px;">
                          <img src="{{ asset('backend/assets/images/prog.png') }}" alt="logo-sm-light"
                          width="150px;">
                      </span>
                      <span class="logo-lg">
                          <img src="{{ asset('backend/assets/images/proglogo.png') }}" alt="logo-light"
                          width="150px;">
                      </span>
                  </a>
              </div> -

              <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect"
                  id="vertical-menu-btn">
                  <i class="ri-menu-2-line align-middle"></i>
              </button>

              <!-- App Search-->
              <form class="app-search d-none d-lg-block">
                  <div class="position-relative">
                      <input type="text" class="form-control" placeholder="Search...">
                      <span class="ri-search-line"></span>
                  </div>
              </form>


          </div>

          <div class="d-flex">

              <div class="dropdown d-none d-lg-inline-block ms-1">
                  <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                      <i class="ri-fullscreen-line"></i>
                  </button>
              </div>

              @php
                  $id = Auth::user()->id;
                  $adminData = App\Models\User::find($id);
              @endphp

              <div class="dropdown d-inline-block user-dropdown">
                  <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                      data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <img class="rounded-circle header-profile-user"
                          src="{{ !empty($adminData->profile_image) ? url('upload/admin_images/' . $adminData->profile_image) : url('upload/no_image.jpg') }}"
                          alt="Header Avatar">
                      <span class="d-none d-xl-inline-block ms-1">{{ $adminData->name }}</span>
                      <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                  </button>
                  <div class="dropdown-menu dropdown-menu-end">
                      <!-- item-->
                      <a class="dropdown-item" href="{{ route('admin.profile') }}">
                      <img src="{{ asset('backend/assets/images/profile.png') }}" alt="logo-sm-light">  Profile</a>
                      <a class="dropdown-item" href="{{ route('change.password') }}">
                      <img src="{{ asset('backend/assets/images/changepass.png') }}" alt="logo-sm-light"> Change Password</a>
                      <a class="dropdown-item d-block" href="#">
                              <img src="{{ asset('backend/assets/images/settings.png') }}" alt="logo-sm-light">  Settings</a>
                      <a class="dropdown-item" href="#"><img src="{{ asset('backend/assets/images/lockscreen.png') }}" alt="logo-sm-light">  Lock
                          screen</a>
                      <div class="dropdown-divider"></div>

                      <a class="dropdown-item text-danger" href="{{ route('admin.logout') }}">
                      <img src="{{ asset('backend/assets/images/logout.png') }}" alt="logo-sm-light">  Logout</a>
                  </div>
              </div>



          </div>
      </div>
  </header>
