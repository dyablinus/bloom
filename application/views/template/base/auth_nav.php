  <header class="main-header">
    <!-- Logo -->
    <a href="" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>Admin</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">


      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
        
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="<?= base_url("/auth")?>" class="dropdown-toggle" data-toggle="dropdown">
              <!--<img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">-->
              <span class="hidden-sm"><i class="fa fa-gears"></i></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <!--<img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">-->

                <p>
                   Jérémy ruiz - Administrateur 
                  <small>Co-créateur de BlankTitle</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="pull-left">
                  <a href="<?= base_url("auth/change_password")?>" class="btn btn-default btn-flat">Change password</a>
                </div>
                <div class="pull-right">
                  <a href="<?= base_url("/auth/logout")?>" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        
        <li style="font-size:20px">
          <a href="<?= base_url("/auth/index")?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        
        <li style="font-size:20px">
          <a href="<?= base_url("/edit/show_all")?>">
            <i class="fa fa-pencil-square-o"></i> <span>Update article</span>
          </a>
        </li>

        <li style="font-size:20px">
          <a href="<?= base_url("/Artiste/index")?>">
            <i class="ion ion-person-add"></i> <span>Add artiste</span>
          </a>
        </li>

        <li style="font-size:20px">
          <a href="<?= base_url("/Artiste/show_all")?>">
            <i class="fa fa-users"></i> <span>Update artiste</span>
          </a>
        </li>

        <li style="font-size:20px">
          <a href="<?= base_url("/edit/draft")?>">
            <i class="fa fa-file-archive-o"></i> <span>Draft</span>
          </a>
        </li>

        <li style="font-size:20px">
          <a href="<?= base_url("/calendar")?>">
            <i class="fa fa-calendar-plus-o"></i> <span>Add event</span>
          </a>
        </li>

        <li style="font-size:20px">
          <a href="<?= base_url("/auth/create_user")?>">
            <i class="fa fa-user-plus"></i> <span>Create User</span>
          </a>
        </li>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>