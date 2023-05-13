
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../dashboard.php" class="brand-link">
      <img src="../dist/img/kecantikan.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Heath&beauty</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../dist/img/andri.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="../profile.php" class="d-block">Andrian Nurwana</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="../dashboard.php" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <!-- <i class="right fas fa-angle-left"></i> -->
              </p>
            </a>
          <li class="nav-header">Items</li>
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Tables
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../card/list_card.php" class="nav-link">
                  <i class="far fa-circle nav-icon text-warning"></i>
                  <p>Card</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../customer/list_customer.php" class="nav-link">
                  <i class="far fa-circle nav-icon text-warning"></i>
                  <p>Customer</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../order/list_order.php" class="nav-link">
                  <i class="far fa-circle nav-icon text-warning"></i>
                  <p>Order</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../product/list_product.php" class="nav-link">
                  <i class="far fa-circle nav-icon text-warning"></i>
                  <p>Product</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../product-type/list_product-type.php" class="nav-link">
                  <i class="far fa-circle nav-icon text-warning"></i>
                  <p>Product-type</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../restock/list_restock.php" class="nav-link">
                  <i class="far fa-circle nav-icon text-warning"></i>
                  <p>Restock</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../supplier/list_supplier.php" class="nav-link">
                  <i class="far fa-circle nav-icon text-warning"></i>
                  <p>Supplier</p>
                </a>
              </li>
            </ul>
          </li>
          
          <li class="nav-header">Users</li>
          <li class="nav-item">
            <a href="../user/list_users.php" class="nav-link">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p class="text">Users</p>
            </a>
          </li>
          <li class="nav-header">Setting</li>
          <li class="nav-item">
            <a href="../profile.php" class="nav-link">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p>Profile</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../logout.php" class="nav-link">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p>Log-Out</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

