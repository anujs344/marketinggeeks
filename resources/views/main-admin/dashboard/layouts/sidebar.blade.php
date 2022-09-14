<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">LOGO</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Admin</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
    

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column " data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
               <li class="nav-item menu-open">
                
                <ul class="nav nav-treeview ">
                  <li class="nav-item">
                    <a href="{{route('dashboard')}}" class="nav-link {{Request::is('dashboard') ? 'active' : ''}}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Dashboard</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{route('customers')}}" class="nav-link {{Request::is('customers') ? 'active' : ''}}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Customers</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{route('kitty')}}" class="nav-link {{Request::is('kitty') ? 'active' : ''}}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Kitty</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{route('allotkitty')}}" class="nav-link {{Request::is('allotkitty') ? 'active' : ''}}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Allot Kitty</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{route('payment')}}" class="nav-link {{Request::is('payment') ? 'active' : ''}}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Payment</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{route('pending_payment')}}" class="nav-link {{Request::is('pending_payment') ? 'active' : ''}}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Pending Payment List</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{route('pending_installments')}}" class="nav-link {{Request::is('pending_installments') ? 'active' : ''}}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Pending Installments</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{route('reward')}}" class="nav-link {{Request::is('reward') ? 'active' : ''}}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Reward</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{route('inventory')}}" class="nav-link {{Request::is('inventory') ? 'active' : ''}}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Inventory</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="./index3.html" class="nav-link {{Request::is('wallet_request') ? 'active' : ''}}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Gem Code(cmgsoon)</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{route('products')}}" class="nav-link {{Request::is('products') ? 'active' : ''}}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Products</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="./index3.html" class="nav-link {{Request::is('sale') ? 'active' : ''}}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Sale</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{route('category')}}" class="nav-link {{Request::is('category') ? 'active' : ''}}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Category</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{route('update_password')}}" class="nav-link {{Request::is('update_password') ? 'active' : ''}}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Update Password</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="./index3.html" class="nav-link {{Request::is('logout') ? 'active' : ''}}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Logout</p>
                    </a>
                  </li>
                </ul>
              </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>