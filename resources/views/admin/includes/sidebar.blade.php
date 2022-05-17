
 <!-- sidebar part here -->
    <nav class="sidebar vertical-scroll  ps-container ps-theme-default ps-active-y">
        <div class="logo d-flex justify-content-between">
            <a href="{{route('admin.index')}}"><img src="{{URL::to('/public/admin')}}/img/logo.png" alt=""></a>
            <div class="sidebar_close_icon d-lg-none">
                <i class="ti-close"></i>
            </div>
        </div>
        <ul id="sidebar_menu">
            <li class="mm-active">
              <a href="{{route('admin.index')}}"  aria-expanded="false">
              <!-- <i class="fas fa-th"></i> -->
              <div class="icon_menu">
                  <img src="{{URL::to('/public/admin')}}/img/menu-icon/dashboard.svg" alt="">
              </div>
                <span>Dashboard</span>
              </a>
            </li>
            <li class="">
                <a   class="has-arrow" href="#" aria-expanded="false">
                  <div class="icon_menu">
                      <img src="{{URL::to('/public/admin')}}/img/menu-icon/cubes.svg" alt="">
                  </div>
                  <span>Orders</span>
                </a>
                <ul>
                  <li><a href="{{route('admin.order.pending')}}">Pending</a></li>
                  <li><a href="{{route('admin.order.delivered')}}">Delivered</a></li>
                  <li><a href="{{route('admin.order.cancelled')}}">Cancelled</a></li>
                </ul>
              </li>
            <li class="">
              <a class="has-arrow" href="#" aria-expanded="false">
                
                <div class="icon_menu">
                    <i class="ti ti-user"></i>
                </div>
                <span>Users</span>
              </a>
              <ul>
                  <li><a href="{{route('admin.users.active')}}">Active</a></li>
                  <li><a href="{{route('admin.users.blocked')}}">Blocked</a></li>
              </ul>
            </li>
            <li class="mm-active">
              <a href="{{route('admin.logout')}}"  aria-expanded="false">
              <!-- <i class="fas fa-th"></i> -->
              <div class="icon_menu">
                  <i class="ti ti-lock"></i>
              </div>
                <span>Logout</span>
              </a>
            </li>
          </ul>
        
    </nav>
<!-- sidebar part end -->