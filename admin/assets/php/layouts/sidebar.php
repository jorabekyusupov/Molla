<div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="/"> <img alt="image" src="/assets/images/icons/favicon.ico" class="header-logo" /> <span
                class="logo-name">Molla</span>
            </a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Main</li>
            <li class="dropdown <?= !isset($_GET['sname'])  ? 'active' : ''  ?>">
              <a href="/admin/" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
            </li>
            <li class="dropdown ">
              <a href="#" class="menu-toggle nav-link has-dropdown <?= isset($_GET['sid']) && ($_GET['sid']==1) ? 'toggled' : ''  ?>"><i
                  data-feather="grid"></i><span>Tables</span></a>
              <ul class="dropdown-menu <?= isset($_GET['sid']) && ($_GET['sid']==1) ? 'd-block' : ''  ?>">
                <li class="<?= isset($_GET['sname']) && ($_GET['sname']=='products') ? 'active' : ''  ?>"><a class="nav-link <?= isset($_GET['sname']) && ($_GET['sname']=='products') ? 'toggled' : ''  ?>" href="/admin/index.php?sid=1&sname=products">Products</a></li>
                <li class="<?= isset($_GET['sname']) && ($_GET['sname']=='orders') ? 'active' : ''  ?>"><a class="nav-link <?= isset($_GET['sname']) && ($_GET['sname']=='orders') ? 'toggled' : ''  ?>" href="/admin/index.php?sid=1&sname=orders">Orders</a></li>
                <li class="<?= isset($_GET['sname']) && ($_GET['sname']=='order_details') ? 'active' : ''  ?>"><a class="nav-link <?= isset($_GET['sname']) && ($_GET['sname']=='orders_details') ? 'toggled' : ''  ?>" href="/admin/index.php?sid=1&sname=order_details">Order Details</a></li>
                <li class="<?= isset($_GET['sname']) && ($_GET['sname']=='categories') ? 'active' : ''  ?>"><a class="nav-link <?= isset($_GET['sname']) && ($_GET['sname']=='categories') ? 'toggled' : ''  ?>" href="/admin/index.php?sid=1&sname=categories">Categories</a></li>
                <li class="<?= isset($_GET['sname']) && ($_GET['sname']=='address') ? 'active' : ''  ?>"><a class="nav-link <?= isset($_GET['sname']) && ($_GET['sname']=='address') ? 'toggled' : ''  ?>" href="/admin/index.php?sid=1&sname=address">Address</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown <?= isset($_GET['sid']) && ($_GET['sid']==2) ? 'toggled' : ''  ?>"><i data-feather="user"></i><span>Users</span></a>
              <ul class="dropdown-menu <?= isset($_GET['sid']) && ($_GET['sid']==2) ? 'd-block' : ''  ?>">
                <li class="<?= isset($_GET['sname']) && ($_GET['sname']=='customers') ? 'active' : ''  ?>"><a class="nav-link <?= isset($_GET['sname']) && ($_GET['sname']=='customers') ? 'toggled' : ''  ?>" href="/admin/index.php?sid=2&sname=customers">Customers</a></li>
                <li class="<?= isset($_GET['sname']) && ($_GET['sname']=='admin') ? 'active' : ''  ?>"><a class="nav-link <?= isset($_GET['sname']) && ($_GET['sname']=='admin') ? 'toggled' : ''  ?>" href="/admin/index.php?sid=2&sname=admin">Employees</a></li>
                <li class="<?= isset($_GET['sname']) && ($_GET['sname']=='roles') ? 'active' : ''  ?>"><a class="nav-link <?= isset($_GET['sname']) && ($_GET['sname']=='roles') ? 'toggled' : ''  ?>" href="/admin/index.php?sid=2&sname=roles">Roles</a></li>
              
              </ul>
            </li>
        
          </ul>
        </aside>
      </div>