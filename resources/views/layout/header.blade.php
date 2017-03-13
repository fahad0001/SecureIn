<header class="main-header">

    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>MRI</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>MRI</b>System</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          
          <!-- /.messages-menu -->

          <!-- Notifications Menu -->
          
          <!-- User Account Menu -->
          <li><a href="{{URL::to('lang/'."de")}}">German</a></li>
              <li><a href="{{URL::to('lang/'."en")}}">English</a></li>
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="{{URL::to('logout')}}">{{trans('language.sign out')}}</a>
          </li>
          <!-- Control Sidebar Toggle Button -->
         
        </ul>
      </div>
    </nav>
  </header>