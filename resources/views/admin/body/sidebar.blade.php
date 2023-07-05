 <div class="vertical-menu">

     <div data-simplebar class="h-100">

         <!-- User details -->
         <!--- Sidemenu -->
         <div id="sidebar-menu">
             <!-- Left Menu Start -->
             <ul class="metismenu list-unstyled" id="side-menu">
                 <li class="menu-title">Menu</li>

                 <li>
                     <a href="{{url('/dashboard') }}" class="waves-effect">
                        
                        <img src="{{ asset('backend/assets/images/dashboard.png') }}" alt="logo-sm-light">
                         {{-- <span class="badge rounded-pill bg-success float-end">3</span> --}}
                         <span>Dashboard</span>
                     </a>
                 </li>

                 <li class="menu-title">Pages</li>
                 <li>
                     <a href="javascript: void(0);" class="has-arrow waves-effect">
                         
                        <img src="{{ asset('backend/assets/images/category.png') }}" alt="logo-sm-light">
                         <span>Category</span>
                     </a>
                     <ul class="sub-menu" aria-expanded="false">
                         <li><a href="{{ route('all.category') }}">All Category</a></li>
                         <li><a href="{{ route('add.category') }}"><img src="{{ asset('backend/assets/images/plus.png') }}" width="10px;" style="margin-top:-3px;"> Add Category</a></li>
                     </ul>
                 </li>

                 <li>
                     <a href="javascript: void(0);" class="has-arrow waves-effect">
                     <img src="{{ asset('backend/assets/images/modules.png') }}" alt="logo-sm-light">
                         <span>Modules</span>
                     </a>
                     <ul class="sub-menu" aria-expanded="false">
                         <!-- <li><a href="{{ route('all.module') }}">All Modules</a></li> -->
                         <li><a href="{{ route('appmed.module') }}"><img src="{{ asset('backend/assets/images/appmed.png') }}" width="15px;" style="margin-top:-3px;"> AppMed</a></li>
                         <li><a href="{{ route('pantheon.module') }}"><img src="{{ asset('backend/assets/images/pantheon.png') }}" width="15px;" style="margin-top:-3px;"> Panthon</a></li>
                         <li><a href="{{ route('add.module') }}"><img src="{{ asset('backend/assets/images/plus.png') }}" width="10px;" style="margin-top:-3px;"> Add Modules</a></li>

                     </ul>
                 </li>

             </ul>
         </div>
         <!-- Sidebar -->
     </div>
 </div>
