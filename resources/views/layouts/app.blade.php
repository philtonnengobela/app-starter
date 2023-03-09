<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="app_assets/css/style.css">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body class="dashboard">

<div id="preloader">
    <i>.</i>
    <i>.</i>
    <i>.</i>
</div>

    <div id="main-wrapper">
       

        <div class="header">
            <div class="container">
               <div class="row">
                  <div class="col-xxl-12">
                     <div class="header-content">
                        <div class="header-left">
                           <div class="brand-logo"><a class="mini-logo" href="index.html"><img src="images/logoi.png" alt="" width="40"></a></div>
                           <div class="search">
                              <form action="#">
                                 <div class="input-group"><input type="text" class="form-control" placeholder="Search Here"><span class="input-group-text"><i class="ri-search-line"></i></span></div>
                              </form>
                           </div>
                        </div>
                        <div class="header-right">
                           <div class="dark-light-toggle"><span class="dark"><i class="ri-moon-line"></i></span><span class="light"><i class="ri-sun-line"></i></span></div>
                           <div class="nav-item dropdown notification dropdown">
                              <div data-toggle="dropdown" aria-haspopup="true" class="" aria-expanded="false">
                                 <div class="notify-bell icon-menu"><span><i class="ri-notification-2-line"></i></span></div>
                              </div>
                              <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu notification-list dropdown-menu dropdown-menu-right">
                                 <h4>Recent Notification</h4>
                                 <div class="lists">
                                    <a class="" href="index.html#">
                                       <div class="d-flex align-items-center">
                                          <span class="me-3 icon success"><i class="ri-check-line"></i></span>
                                          <div>
                                             <p>Account created successfully</p>
                                             <span>2020-11-04 12:00:23</span>
                                          </div>
                                       </div>
                                    </a>
                                    <a class="" href="index.html#">
                                       <div class="d-flex align-items-center">
                                          <span class="me-3 icon fail"><i class="ri-close-line"></i></span>
                                          <div>
                                             <p>2FA verification failed</p>
                                             <span>2020-11-04 12:00:23</span>
                                          </div>
                                       </div>
                                    </a>
                                    <a class="" href="index.html#">
                                       <div class="d-flex align-items-center">
                                          <span class="me-3 icon success"><i class="ri-check-line"></i></span>
                                          <div>
                                             <p>Device confirmation completed</p>
                                             <span>2020-11-04 12:00:23</span>
                                          </div>
                                       </div>
                                    </a>
                                    <a class="" href="index.html#">
                                       <div class="d-flex align-items-center">
                                          <span class="me-3 icon pending"><i class="ri-question-mark"></i></span>
                                          <div>
                                             <p>Phone verification pending</p>
                                             <span>2020-11-04 12:00:23</span>
                                          </div>
                                       </div>
                                    </a>
                                    <a href="notification.html">More<i class="ri-arrow-right-s-line"></i></a>
                                 </div>
                              </div>
                           </div>
                           <div class="dropdown profile_log dropdown">
                              <div data-toggle="dropdown" aria-haspopup="true" class="" aria-expanded="false">
                                 <div class="user icon-menu active"><span><i class="ri-user-line"></i></span></div>
                              </div>
                              <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu dropdown-menu-right">
                                 <div class="user-email">
                                    <div class="user">
                                       <span class="thumb"><img src="images/profile/3.png" alt=""></span>
                                       <div class="user-info">
                                          <h5>{{ Auth::user()->name }}</h5>
                                          <span>{{ Auth::user()->email }}</span>
                                       </div>
                                    </div>
                                 </div>
                                 <a class="dropdown-item" href="profile.html"><span><i class="ri-user-line"></i></span>Profile</a>
                                 <a class="dropdown-item" href="balance.html"><span><i class="ri-wallet-line"></i></span>Balance</a>
                                 <a class="dropdown-item" href="settings-profile.html"><span><i class="ri-settings-3-line"></i></span>Settings</a>
                                 <a class="dropdown-item" href="settings-activity.html"><span><i class="ri-time-line"></i></span>Activity</a>
                                 <a class="dropdown-item" href="lock.html"><span><i class="ri-lock-line"></i></span>Lock</a>
                                 <a class="dropdown-item logout" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="ri-logout-circle-line"></i>Logout</a>
                                 <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
        
            <div class="sidebar">
            <div class="brand-logo"><a class="full-logo" href="index.html"><img src="images/logoi.png" alt="" width="30"></a></div>
            <div class="menu">
                <ul>
                    <li><a href="index-2.html">
                            <span><i class="ri-home-5-line"></i></span>
                            <span class="nav-text">Dashboard</span>
                        </a>
                    </li>
                    <li><a href="balance.html">
                            <span><i class="ri-wallet-line"></i></span>
                            <span class="nav-text">Wallet</span>
                        </a>
                    </li>
                    <li><a href="bill.html">
                            <span><i class="ri-secure-payment-line"></i></span>
                            <span class="nav-text">Payment</span>
                        </a>
                    </li>
                    <li><a href="invoice.html">
                            <span><i class="ri-file-copy-2-line"></i></span>
                            <span class="nav-text">Invoice</span>
                        </a>
                    </li>
                    <li><a href="settings-profile.html">
                            <span><i class="ri-settings-3-line"></i></span>
                            <span class="nav-text">Settings</span>
                        </a>
                    </li>
                    <li class="logout"><a href="signin.html">
                            <span><i class="ri-logout-circle-line"></i></span>
                            <span class="nav-text">Signout</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</div>

<script src="app_assets/vendor/jquery/jquery.min.js"></script>
<script src="app_assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="app_assets/vendor/chartjs/chartjs.js"></script>
<script src="app_assets/js/plugins/chartjs-line-init.js"></script>
<script src="app_assets/js/plugins/chartjs-donut.js"></script>
<script src="app_assets/vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="app_assets/js/plugins/perfect-scrollbar-init.js"></script>
<script src="app_assets/vendor/circle-progress/circle-progress.min.js"></script>
<script src="app_assets/js/plugins/circle-progress-init.js"></script>
<script src="app_assets/js/scripts.js"></script>

</body>
</html>
