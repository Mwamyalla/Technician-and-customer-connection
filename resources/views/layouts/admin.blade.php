
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Admin Dashboard</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
<!--   <link href="{{asset('admin/assets/img/favicon.png')}}" rel="icon">
  <link href="{{asset('admin/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon"> -->

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('admin/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('admin/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('admin/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('admin/assets/vendor/quill/quill.snow.css')}}" rel="stylesheet">
  <link href="{{asset('admin/assets/vendor/quill/quill.bubble.css')}}" rel="stylesheet">
  <link href="{{asset('admin/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('admin/assets/vendor/simple-datatables/style.css')}}" rel="stylesheet">
  <link href="{{asset('//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css')}}" rel="stylesheet" id="bootstrap-css">
  <script src="{{asset('//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('//code.jquery.com/jquery-1.11.1.min.js')}}"></script>
  <link rel='stylesheet' href='http://fullcalendar.io/js/fullcalendar-2.2.3/fullcalendar.css' />

  <!-- Template Main CSS File -->
  <link href="{{asset('admin/assets/css/style.css')}}" rel="stylesheet">
  @livewireStyles
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <!-- <img src="{{asset('admin/assets/img/logo.jpg')}}" class="img-fluid " width="70px" height="110px" alt=""> -->
        <span class="d-none d-lg-block">TECHNICIANS</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-bell"></i>
            <span class="badge bg-primary badge-number">3</span>
          </a><!-- End Notification Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
            <li class="dropdown-header">
              You have 3 new notifications
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-exclamation-circle text-warning"></i>
              <div>
                <h4>System error</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>At 12:30</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-x-circle text-danger"></i>
              <div>
                <h4>System failure</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>At 12:30</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-check-circle text-success"></i>
              <div>
                <h4>New booking</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>At 12:30</p>
              </div>
            </li>


            <li>
              <hr class="dropdown-divider">
            </li>
            <li class="dropdown-footer">
              <a href="notification.html">Show all notifications</a>
            </li>

          </ul><!-- End Notification Dropdown Items -->

        </li><!-- End Notification Nav -->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-chat-left-text"></i>
            <span class="badge bg-success badge-number">2</span>
          </a><!-- End Messages Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
            <li class="dropdown-header">
              You have 2 new messages
              <a href="message.html"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="{{asset('admin/assets/img/profile/person.jpg')}}" alt="" class="rounded-circle">
                <div>
                  <h4>Mwitta Mwitta</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>At 11:28</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="{{asset('admin/assets/img/profile/person.jpg')}}" alt="" class="rounded-circle">
                <div>
                  <h4>Mwitta Mwitta</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>At 11:28</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="dropdown-footer">
              <a href="message.html">Show all messages</a>
            </li>

          </ul><!-- End Messages Dropdown Items -->

        </li><!-- End Messages Nav -->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="{{asset('admin/assets/img/profile/person.jpg')}}" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">Millan K.</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Millan K.</h6>
              <span>System Admin</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="profile.html">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="accoutsetting.html">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="help.html">
                <i class="bi bi-question-circle"></i>
                <span>Need Help?</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="bi bi-box-arrow-right"></i>
                <span>Logout</span>
              </a>
            </li>
            <form id="logout-form" method="post" action="{{route('logout')}}" style="display:none;">
                @csrf

            </form>
          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="{{route('admin.dashboard')}}">
          <i class="bx bxs-grid-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <!-- End Dashboard Nav -->

      <li class="nav-heading">MAIN</li>

        <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Categories</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('admin.add_service_category')}}">
              <i class="bi bi-circle"></i><span>Add New Category</span>
            </a>
          </li>
          <li>
            <a href="{{route('admin.service_categories')}}">
              <i class="bi bi-circle"></i><span>All Categories</span>
            </a>
          </li>
        </ul>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#owner-nav" data-bs-toggle="collapse" href="#">
          <i class="bx bxs-contact"></i><span>Owners</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="owner-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="addowner.html">
              <i class="bi bi-circle"></i><span>Add New Owner</span>
            </a>
          </li>
          <li>
            <a href="owner.html">
              <i class="bi bi-circle"></i><span>All Owners</span>
            </a>
          </li>
        </ul>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#customer-nav" data-bs-toggle="collapse" href="#">
          <i class="bx bxs-user"></i><span>Customers</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="customer-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="addcustomer.html">
              <i class="bi bi-circle"></i><span>Add New Customer</span>
            </a>
          </li>
          <li>
            <a href="customers.html">
              <i class="bi bi-circle"></i><span>All Customers</span>
            </a>
          </li>
        </ul>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#coupon-nav" data-bs-toggle="collapse" href="#">
          <i class="bx bxs-discount"></i><span>Coupons</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="coupon-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="addcoupon.html">
              <i class="bi bi-circle"></i><span>Add New Coupon</span>
            </a>
          </li>
          <li>
            <a href="coupon.html">
              <i class="bi bi-circle"></i><span>All Coupons</span>
            </a>
          </li>
        </ul>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="Wallet.html">
          <i class=" bx bxs-wallet-alt"></i>
          <span>Wallet</span>
        </a>
      </li><!-- End F.A.Q Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="message.html">
          <i class="bx bxs-message-detail"></i>
          <span>Message</span>
        </a>
      </li><!-- End Contact Page Nav -->


      <li class="nav-heading">SETTINGS</li>


      <li class="nav-item">
        <a class="nav-link collapsed" href="systemsetting.html">
          <i class="bx bx-cog"></i>
          <span>System Settings</span>
        </a>
      </li><!-- End add listings Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="websitesetting.html">
          <i class=" bx bxs-spreadsheet"></i>
          <span>Website Settings</span>
        </a>
      </li><!-- End my listing Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="paymentsetting.html">
          <i class="bx bxs-discount"></i>
          <span>Payment Settings</span>
        </a>
      </li><!-- End Coupons Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="databasesetting.html">
          <i class="bx bxs-coin-stack"></i>
          <span>Database Settings</span>
        </a>
      </li>
      <!-- End Reviews Page Nav -->

      <li class="nav-heading">ACCOUNT SETTINGS</li>


      <li class="nav-item">
        <a class="nav-link collapsed" href="profile.html">
          <i class="bi bi-person-circle"></i>
          <span>My Profile</span>
        </a>
      </li><!-- End My Profile Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
          <i class="bi bi-arrow-bar-right"></i>
          <span>Logout</span>
        </a>
      </li>
      <!-- End logout Page Nav -->

    </ul>

  </aside><!-- End Sidebar-->

  {{$slot}}

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>Auto360Africa</span></strong>. All Rights Reserved
    </div>
    <div class="credits">

      Designed by <a href="#">@StoneLab</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('admin/assets/vendor/apexcharts/apexcharts.min.js')}}"></script>
  <script src="{{asset('admin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('admin/assets/vendor/chart.js/chart.min.js')}}"></script>
  <script src="{{asset('admin/assets/vendor/echarts/echarts.min.js')}}"></script>
  <script src="{{asset('admin/assets/vendor/quill/quill.min.js')}}"></script>
  <script src="{{asset('admin/assets/vendor/simple-datatables/simple-datatables.js')}}"></script>
  <script src="{{asset('admin/assets/vendor/tinymce/tinymce.min.js')}}"></script>
  <script src="{{asset('admin/assets/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('admin/assets/js/main.js')}}"></script>
  @livewireScripts
</body>

</html>
