<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link rel="manifest" href="assets/img/favicons/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/img/favicons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@400;500;600;700;800&amp;family=Jost:wght@300;400;500;600;700;800;900&amp;family=Roboto:wght@100;300;400;500;700&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/app.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="preloader">
        <button class="as-btn style3 preloaderCls">Cancel Preloader</button>
        <div class="preloader-inner">
          <span class="loader"></span>
        </div>
      </div>
      <div class="sidemenu-wrapper sidemenu1 d-none d-lg-block">
        <div class="sidemenu-content">
          <button class="closeButton sideMenuCls">
            <i class="far fa-times"></i>
          </button>
          <div class="widget woocommerce widget_shopping_cart">
            <h3 class="widget_title">Shopping cart</h3>
            <div class="widget_shopping_cart_content">
              <ul class="woocommerce-mini-cart cart_list product_list_widget">
                <li class="woocommerce-mini-cart-item mini_cart_item">
                  <a href="#" class="remove remove_from_cart_button">
                    <i class="far fa-times"></i>
                  </a>
                  <a href="#">
                    <img src="assets/img/cart/cart_1_1.jpg" alt="Cart Image">HTML5 Course </a>
                  <span class="quantity">1 × <span class="woocommerce-Price-amount amount">
                      <span class="woocommerce-Price-currencySymbol">$</span>40.00 </span>
                  </span>
                </li>
                <li class="woocommerce-mini-cart-item mini_cart_item">
                  <a href="#" class="remove remove_from_cart_button">
                    <i class="far fa-times"></i>
                  </a>
                  <a href="#">
                    <img src="assets/img/cart/cart_1_2.jpg" alt="Cart Image">JS ES6 Course </a>
                  <span class="quantity">1 × <span class="woocommerce-Price-amount amount">
                      <span class="woocommerce-Price-currencySymbol">$</span>99.00 </span>
                  </span>
                </li>
                <li class="woocommerce-mini-cart-item mini_cart_item">
                  <a href="#" class="remove remove_from_cart_button">
                    <i class="far fa-times"></i>
                  </a>
                  <a href="#">
                    <img src="assets/img/cart/cart_1_3.jpg" alt="Cart Image">PHP Course </a>
                  <span class="quantity">1 × <span class="woocommerce-Price-amount amount">
                      <span class="woocommerce-Price-currencySymbol">$</span>56.00 </span>
                  </span>
                </li>
                <li class="woocommerce-mini-cart-item mini_cart_item">
                  <a href="#" class="remove remove_from_cart_button">
                    <i class="far fa-times"></i>
                  </a>
                  <a href="#">
                    <img src="assets/img/cart/cart_1_4.jpg" alt="Cart Image">Python Course </a>
                  <span class="quantity">1 × <span class="woocommerce-Price-amount amount">
                      <span class="woocommerce-Price-currencySymbol">$</span>23.00 </span>
                  </span>
                </li>
                <li class="woocommerce-mini-cart-item mini_cart_item">
                  <a href="#" class="remove remove_from_cart_button">
                    <i class="far fa-times"></i>
                  </a>
                  <a href="#">
                    <img src="assets/img/cart/cart_1_5.jpg" alt="Cart Image">WordPress Course </a>
                  <span class="quantity">1 × <span class="woocommerce-Price-amount amount">
                      <span class="woocommerce-Price-currencySymbol">$</span>100.00 </span>
                  </span>
                </li>
              </ul>
              <p class="woocommerce-mini-cart__total total">
                <strong>Subtotal:</strong>
                <span class="woocommerce-Price-amount amount">
                  <span class="woocommerce-Price-currencySymbol">$</span>318.00 </span>
              </p>
              <p class="woocommerce-mini-cart__buttons buttons">
                <a href="cart.html" class="as-btn wc-forward">View cart</a>
                <a href="checkout.html" class="as-btn checkout wc-forward">Checkout</a>
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="popup-search-box d-none d-lg-block">
        <button class="searchClose">
          <i class="fal fa-times"></i>
        </button>
        <form action="#">
          <input type="text" placeholder="What are you looking for?">
          <button type="submit">
            <i class="fal fa-search"></i>
          </button>
        </form>
      </div>
      <div class="as-menu-wrapper">
        <div class="as-menu-area text-center">
          <button class="as-menu-toggle">
            <i class="fal fa-times"></i>
          </button>
          <div class="mobile-logo">
            <a href="index.html">
              <img src="assets/img/logo.svg" alt="Acadu">
            </a>
          </div>
          <div class="as-mobile-menu">
            <ul>
              <li class="menu-item-has-children">
                <a href="index.html">Home</a>
                <ul class="sub-menu">
                  <li>
                    <a href="index.html">University Home <span class="new-label">New</span>
                    </a>
                  </li>
                  <li>
                    <a href="index-2.html">Online Education <span class="new-label">New</span>
                    </a>
                  </li>
                  <li>
                    <a href="index-3.html">Online Instructor <span class="new-label">New</span>
                    </a>
                  </li>
                  <li>
                    <a href="index-4.html">Skill Development <span class="new-label">New</span>
                    </a>
                  </li>
                  <li>
                    <a href="index-5.html">One Page Trainer <span class="new-label">New</span>
                    </a>
                  </li>
                  <li>
                    <a href="index-6.html">Univesity Admission <span class="new-label">New</span>
                    </a>
                  </li>
                  <li>
                    <a href="index-kindergarten.html">Home Kindergarten <span class="new-label">New</span>
                    </a>
                  </li>
                  <li>
                    <a href="index-rtl.html">Home RTL <span class="new-label">New</span>
                    </a>
                  </li>
                  <li>
                    <a href="index-7.html">Academy Home</a>
                  </li>
                  <li>
                    <a href="index-8.html">Online Training</a>
                  </li>
                  <li>
                    <a href="index-9.html">Online Mentors</a>
                  </li>
                  <li>
                    <a href="index-10.html">Online Courses</a>
                  </li>
                </ul>
              </li>
              <li class="menu-item-has-children">
                <a href="#">Courses</a>
                <ul class="sub-menu">
                  <li>
                    <a href="course.html">Courses</a>
                  </li>
                  <li>
                    <a href="video-course.html">Video Courses</a>
                  </li>
                  <li>
                    <a href="course-details.html">Course Details</a>
                  </li>
                </ul>
              </li>
              <li class="menu-item-has-children">
                <a href="#">Teachers</a>
                <ul class="sub-menu">
                  <li>
                    <a href="team.html">Teachers</a>
                  </li>
                  <li>
                    <a href="team-details.html">Teacher Details</a>
                  </li>
                </ul>
              </li>
              <li class="menu-item-has-children mega-menu-wrap">
                <a href="#">Pages</a>
                <ul class="mega-menu">
                  <li>
                    <a href="shop.html">Pagelist 1</a>
                    <ul>
                      <li>
                        <a href="index.html">Home One</a>
                      </li>
                      <li>
                        <a href="index-2.html">Home Two</a>
                      </li>
                      <li>
                        <a href="index-3.html">Home Three</a>
                      </li>
                      <li>
                        <a href="index-4.html">Home Four</a>
                      </li>
                      <li>
                        <a href="index-5.html">Home Five</a>
                      </li>
                      <li>
                        <a href="index-6.html">Home Six</a>
                      </li>
                      <li>
                        <a href="index-7.html">Home Seven</a>
                      </li>
                    </ul>
                  </li>
                  <li>
                    <a href="#">Pagelist 2</a>
                    <ul>
                      <li>
                        <a href="index-8.html">Home Eight</a>
                      </li>
                      <li>
                        <a href="index-9.html">Home Nine</a>
                      </li>
                      <li>
                        <a href="index-10.html">Home Ten</a>
                      </li>
                      <li>
                        <a href="index-kindergarten.html">Home Kindergarten</a>
                      </li>
                      <li>
                        <a href="about.html">About Us</a>
                      </li>
                      <li>
                        <a href="about-2.html">About Us Two</a>
                      </li>
                      <li>
                        <a href="team.html">Teachers</a>
                      </li>
                    </ul>
                  </li>
                  <li>
                    <a href="#">Pagelist 3</a>
                    <ul>
                      <li>
                        <a href="team-details.html">Teachers Details</a>
                      </li>
                      <li>
                        <a href="blog.html">Blog</a>
                      </li>
                      <li>
                        <a href="blog-details.html">Blog Details</a>
                      </li>
                      <li>
                        <a href="course.html">Courses</a>
                      </li>
                      <li>
                        <a href="video-course.html">Video Courses</a>
                      </li>
                      <li>
                        <a href="course-details.html">Course Details</a>
                      </li>
                      <li>
                        <a href="event.html">Event</a>
                      </li>
                    </ul>
                  </li>
                  <li>
                    <a href="#">Pagelist 4</a>
                    <ul>
                      <li>
                        <a href="event-details.html">Event Details</a>
                      </li>
                      <li>
                        <a href="gallery.html">Gallery</a>
                      </li>
                      <li>
                        <a href="contact.html">Contact Us</a>
                      </li>
                      <li>
                        <a href="cart.html">Shopping Cart</a>
                      </li>
                      <li>
                        <a href="wishlist.html">Wishlist</a>
                      </li>
                      <li>
                        <a href="error.html">Error Page</a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li class="menu-item-has-children">
                <a href="#">Blog</a>
                <ul class="sub-menu">
                  <li>
                    <a href="blog.html">Blog</a>
                  </li>
                  <li>
                    <a href="blog-details.html">Blog Details</a>
                  </li>
                </ul>
              </li>
              <li>
                <a href="contact.html">Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <header class="as-header header-layout4">
        <div class="header-layout2">
          <div class="header-top">
            <div class="container">
              <div class="row justify-content-center justify-content-lg-between align-items-center gy-2">
                <div class="col-auto d-none d-lg-block">
                  <div class="header-links">
                    <ul>
                      <li>
                        <i class="fas fa-envelope"></i>
                        <b>Email Us: </b>
                        <a href="mailto:info@acadu.com">info@acadu.com</a>
                      </li>
                      <li>
                        <i class="fas fa-phone"></i>
                        <b>Hotline: </b>
                        <a href="tel:+256214203215">256 214 203 215</a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="col-auto">
                  <div class="header-links">
                    <ul>
                      <li>
                        <div class="header-social">
                          <a href="https://www.facebook.com/">
                            <i class="fab fa-facebook-f"></i>
                          </a>
                          <a href="https://www.twitter.com/">
                            <i class="fab fa-twitter"></i>
                          </a>
                          <a href="https://www.linkedin.com/">
                            <i class="fab fa-linkedin-in"></i>
                          </a>
                          <a href="https://www.instagram.com/">
                            <i class="fab fa-instagram"></i>
                          </a>
                          <a href="https://www.youtube.com/">
                            <i class="fab fa-youtube"></i>
                          </a>
                        </div>
                      </li>
                      <li>
                        <i class="fas fa-user"></i>
                        @if (Route::has('login'))
                            @auth
                                <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
                                @else
                                <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                                @endif
                            @endauth
                        @endif
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="sticky-wrapper">
          <div class="sticky-active">
            <div class="menu-area">
              <div class="container">
                <div class="row align-items-center justify-content-between">
                  <div class="col-auto">
                    <div class="header-logo">
                      <a href="index.html">
                        <!-- <img src="images/frontfootlogo_old.png" alt="Acadu"> -->
                        <h4>Logo Here</h4>
                      </a>
                    </div>
                  </div>
                  <div class="col-auto d-none d-xl-inline-block">
                    <div class="category-menu-wrap">
                      <a class="menu-expand" href="#">
                        <i class="fa-solid fa-list"></i>Categories </a>
                      <nav class="category-menu">
                        <ul>
                          <li>
                            <a href="course-2.html">Javascript</a>
                          </li>
                          <li>
                            <a href="course-2.html">Marketing</a>
                          </li>
                          <li>
                            <a href="course-2.html">Data Science</a>
                          </li>
                          <li>
                            <a href="course-2.html">Content Writing</a>
                          </li>
                          <li>
                            <a href="course-2.html">Freelancing</a>
                          </li>
                          <li>
                            <a href="course-2.html">Startup Growth</a>
                          </li>
                          <li>
                            <a href="course-2.html">UI/UX Design</a>
                          </li>
                          <li>
                            <a href="course-2.html">Web Development</a>
                          </li>
                        </ul>
                      </nav>
                    </div>
                  </div>
                  <div class="col-auto">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <nav class="main-menu d-none d-lg-inline-block">
                          <ul>
                            <li class="menu-item-has-children">
                              <a href="index.html">Home</a>
                              <ul class="sub-menu">
                                <li>
                                  <a href="index.html">University Home <span class="new-label">New</span>
                                  </a>
                                </li>
                                <li>
                                  <a href="index-2.html">Online Education <span class="new-label">New</span>
                                  </a>
                                </li>
                                <li>
                                  <a href="index-3.html">Online Instructor <span class="new-label">New</span>
                                  </a>
                                </li>
                                <li>
                                  <a href="index-4.html">Skill Development <span class="new-label">New</span>
                                  </a>
                                </li>
                                <li>
                                  <a href="index-5.html">One Page Trainer <span class="new-label">New</span>
                                  </a>
                                </li>
                                <li>
                                  <a href="index-6.html">Univesity Admission <span class="new-label">New</span>
                                  </a>
                                </li>
                                <li>
                                  <a href="index-kindergarten.html">Home Kindergarten <span class="new-label">New</span>
                                  </a>
                                </li>
                                <li>
                                  <a href="index-rtl.html">Home RTL <span class="new-label">New</span>
                                  </a>
                                </li>
                                <li>
                                  <a href="index-7.html">Academy Home</a>
                                </li>
                                <li>
                                  <a href="index-8.html">Online Training</a>
                                </li>
                                <li>
                                  <a href="index-9.html">Online Mentors</a>
                                </li>
                                <li>
                                  <a href="index-10.html">Online Courses</a>
                                </li>
                              </ul>
                            </li>
                            <li class="menu-item-has-children">
                              <a href="#">Courses</a>
                              <ul class="sub-menu">
                                <li>
                                  <a href="course.html">Courses</a>
                                </li>
                                <li>
                                  <a href="video-course.html">Video Courses</a>
                                </li>
                                <li>
                                  <a href="course-details.html">Course Details</a>
                                </li>
                              </ul>
                            </li>
                            <li class="menu-item-has-children">
                              <a href="#">Teachers</a>
                              <ul class="sub-menu">
                                <li>
                                  <a href="team.html">Teachers</a>
                                </li>
                                <li>
                                  <a href="team-details.html">Teacher Details</a>
                                </li>
                              </ul>
                            </li>
                            <li class="menu-item-has-children mega-menu-wrap">
                              <a href="#">Pages</a>
                              <ul class="mega-menu">
                                <li>
                                  <a href="shop.html">Pagelist 1</a>
                                  <ul>
                                    <li>
                                      <a href="index.html">Home One</a>
                                    </li>
                                    <li>
                                      <a href="index-2.html">Home Two</a>
                                    </li>
                                    <li>
                                      <a href="index-3.html">Home Three</a>
                                    </li>
                                    <li>
                                      <a href="index-4.html">Home Four</a>
                                    </li>
                                    <li>
                                      <a href="index-5.html">Home Five</a>
                                    </li>
                                    <li>
                                      <a href="index-6.html">Home Six</a>
                                    </li>
                                    <li>
                                      <a href="index-7.html">Home Seven</a>
                                    </li>
                                  </ul>
                                </li>
                                <li>
                                  <a href="#">Pagelist 2</a>
                                  <ul>
                                    <li>
                                      <a href="index-8.html">Home Eight</a>
                                    </li>
                                    <li>
                                      <a href="index-9.html">Home Nine</a>
                                    </li>
                                    <li>
                                      <a href="index-10.html">Home Ten</a>
                                    </li>
                                    <li>
                                      <a href="index-kindergarten.html">Home Kindergarten</a>
                                    </li>
                                    <li>
                                      <a href="about.html">About Us</a>
                                    </li>
                                    <li>
                                      <a href="about-2.html">About Us Two</a>
                                    </li>
                                    <li>
                                      <a href="team.html">Teachers</a>
                                    </li>
                                  </ul>
                                </li>
                                <li>
                                  <a href="#">Pagelist 3</a>
                                  <ul>
                                    <li>
                                      <a href="team-details.html">Teachers Details</a>
                                    </li>
                                    <li>
                                      <a href="blog.html">Blog</a>
                                    </li>
                                    <li>
                                      <a href="blog-details.html">Blog Details</a>
                                    </li>
                                    <li>
                                      <a href="course.html">Courses</a>
                                    </li>
                                    <li>
                                      <a href="video-course.html">Video Courses</a>
                                    </li>
                                    <li>
                                      <a href="course-details.html">Course Details</a>
                                    </li>
                                    <li>
                                      <a href="event.html">Event</a>
                                    </li>
                                  </ul>
                                </li>
                                <li>
                                  <a href="#">Pagelist 4</a>
                                  <ul>
                                    <li>
                                      <a href="event-details.html">Event Details</a>
                                    </li>
                                    <li>
                                      <a href="gallery.html">Gallery</a>
                                    </li>
                                    <li>
                                      <a href="contact.html">Contact Us</a>
                                    </li>
                                    <li>
                                      <a href="cart.html">Shopping Cart</a>
                                    </li>
                                    <li>
                                      <a href="wishlist.html">Wishlist</a>
                                    </li>
                                    <li>
                                      <a href="error.html">Error Page</a>
                                    </li>
                                  </ul>
                                </li>
                              </ul>
                            </li>
                            <li class="menu-item-has-children">
                              <a href="#">Blog</a>
                              <ul class="sub-menu">
                                <li>
                                  <a href="blog.html">Blog</a>
                                </li>
                                <li>
                                  <a href="blog-details.html">Blog Details</a>
                                </li>
                              </ul>
                            </li>
                            <li>
                              <a href="contact.html">Contact</a>
                            </li>
                          </ul>
                        </nav>
                        <button type="button" class="as-menu-toggle d-inline-block d-lg-none">
                          <i class="far fa-bars"></i>
                        </button>
                      </div>
                      <div class="col-auto d-none d-xxl-block">
                        <div class="header-button">
                          <button type="button" class="icon-btn searchBoxToggler">
                            <i class="far fa-search"></i>
                          </button>
                          <a href="wishlist.html" class="icon-btn">
                            <i class="far fa-heart"></i>
                            <span class="badge">3</span>
                          </a>
                          <a href="#" class="icon-btn sideMenuToggler">
                            <i class="far fa-cart-shopping"></i>
                            <span class="badge bg-theme2">5</span>
                          </a>
                          <a href="contact.html" class="as-btn ml-25">Become Instructor <i class="fas fa-arrow-right ms-2"></i>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </header>

    <main class="py-4">
        @yield('content')
    </main>
    
    <footer class="footer-wrapper footer-layout4" data-bg-src="assets/img/bg/footer_bg_2.jpg">
        <div class="widget-area">
          <div class="container">
            <div class="row justify-content-between">
              <div class="col-md-6 col-xl-3">
                <div class="widget footer-widget style2">
                  <h3 class="widget_title">Get in touch!</h3>
                  <div class="as-widget-about">
                    <p class="about-text">Fusce varius, dolor tempor interdum tristiquei bibendum menar beson.</p>
                    <div class="info-box">
                      <span class="info-box_text">Toll Free Customer Care</span>
                      <a href="tel:+11234567890" class="info-box_link">
                        <i class="fas fa-phone"></i>+(1) 123 456 7890 </a>
                    </div>
                    <div class="footer-social">
                      <a href="https://www.facebook.com/">
                        <i class="fab fa-facebook-f"></i>
                      </a>
                      <a href="https://www.twitter.com/">
                        <i class="fab fa-twitter"></i>
                      </a>
                      <a href="https://www.linkedin.com/">
                        <i class="fab fa-linkedin-in"></i>
                      </a>
                      <a href="https://www.instagram.com/">
                        <i class="fab fa-instagram"></i>
                      </a>
                      <a href="https://www.youtube.com/">
                        <i class="fab fa-youtube"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-xl-auto">
                <div class="widget widget_nav_menu footer-widget style2">
                  <h3 class="widget_title">Company</h3>
                  <div class="menu-all-pages-container">
                    <ul class="menu">
                      <li>
                        <a href="about.html">About Us</a>
                      </li>
                      <li>
                        <a href="course.html">Resource Center</a>
                      </li>
                      <li>
                        <a href="course.html">Careers</a>
                      </li>
                      <li>
                        <a href="team.html">Instructor</a>
                      </li>
                      <li>
                        <a href="contact.html">Become A Teacher</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-xl-auto">
                <div class="widget widget_nav_menu footer-widget style2">
                  <h3 class="widget_title">Courses</h3>
                  <div class="menu-all-pages-container">
                    <ul class="menu">
                      <li>
                        <a href="course.html">Health Course</a>
                      </li>
                      <li>
                        <a href="course.html">Development</a>
                      </li>
                      <li>
                        <a href="course.html">Web Design</a>
                      </li>
                      <li>
                        <a href="course.html">SEO Optimize</a>
                      </li>
                      <li>
                        <a href="course.html">Marketing</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-xl-auto">
                <div class="widget footer-widget style2">
                  <h3 class="widget_title">Recent Posts</h3>
                  <div class="recent-post-wrap">
                    <div class="recent-post">
                      <div class="media-img">
                        <a href="blog-details.html">
                          <img src="assets/img/blog/recent-post-2-1.jpg" alt="Blog Image">
                        </a>
                      </div>
                      <div class="media-body">
                        <h4 class="post-title">
                          <a class="text-inherit" href="blog-details.html">Mission critical action life items rather</a>
                        </h4>
                        <div class="recent-post-meta">
                          <a href="blog.html">
                            <i class="fal fa-clock"></i>15th April, 2022 </a>
                        </div>
                      </div>
                    </div>
                    <div class="recent-post">
                      <div class="media-img">
                        <a href="blog-details.html">
                          <img src="assets/img/blog/recent-post-2-2.jpg" alt="Blog Image">
                        </a>
                      </div>
                      <div class="media-body">
                        <h4 class="post-title">
                          <a class="text-inherit" href="blog-details.html">Vission critical action life items better</a>
                        </h4>
                        <div class="recent-post-meta">
                          <a href="blog.html">
                            <i class="fal fa-clock"></i>16th April, 2022 </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="copyright-wrap">
          <div class="container">
            <p class="copyright-text text-center">Copyright <i class="fal fa-copyright"></i> 2022 <a href="https://themeforest.net/user/angfuz_soft">Angfuzsoft</a>. All Rights Reserved. </p>
          </div>
        </div>
        <a href="#" class="scrollToTop scroll-btn">
          <i class="far fa-arrow-up"></i>
        </a>
      </footer>
      <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
      <script src="assets/js/app.min.js"></script>
      <script src="assets/js/main.js"></script>
</body>
</html>
