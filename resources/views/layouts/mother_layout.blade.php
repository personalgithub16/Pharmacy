<!DOCTYPE html>
<html lang="en">



<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  
  <link rel="icon" href="../assets/images/favicon/favicon.png" type="image/x-icon">
  <link rel="shortcut icon" href="../assets/images/favicon/favicon.png" type="image/x-icon">
  <title>Pharmacy Management System</title>
  <link rel="preconnect" href="https://fonts.googleapis.com/">
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/select2.css')}}">
  <link
    href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
    rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="{{asset("assets/css/vendors/font-awesome.css")}}">
  <!-- ico-font-->
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/icofont.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/date-picker.css')}}">
  <!-- Themify icon-->
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/themify.css')}}">
  <!-- Flag icon-->
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/flag-icon.css')}}">

  <!-- Bootstrap css-->
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/bootstrap.css')}}">
  <!-- App css-->
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
  <link id="color" rel="stylesheet" href="{{asset('assets/css/color-1.css')}}" media="screen">
  <!-- Responsive css-->
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/responsive.css')}}">
  <!-- Feather icon-->
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/feather-icon.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/scrollbar.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/animate.css')}}>
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/chartist.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/prism.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/vector-map.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/datatables.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/datatable-extension.css')}}">
  

</head>

<body onload="startTime()">
  <!-- tap on top starts-->
  <div class="tap-top"><i data-feather="chevrons-up"></i></div>
  <!-- tap on tap ends-->
  <!-- Loader starts-->
  <div class="loader-wrapper">
    <div class="dot"></div>
    <div class="dot"></div>
    <div class="dot"></div>
    <div class="dot"> </div>
    <div class="dot"></div>
  </div>
  <!-- Loader ends-->
  <!-- page-wrapper Start-->
  <div class="page-wrapper compact-wrapper" id="pageWrapper">
    <!-- Page Header Start-->
    <div class="page-header">
      <div class="header-wrapper row m-0">
        <form class="form-inline search-full col" action="#" method="get">
          <div class="form-group w-100">
            <div class="Typeahead Typeahead--twitterUsers">
              <div class="u-posRelative">
                <input class="demo-input Typeahead-input form-control-plaintext w-100" type="text"
                  placeholder="Search Tivo .." name="q" title="" autofocus>
                <div class="spinner-border Typeahead-spinner" role="status"><span class="sr-only">Loading...</span>
                </div><i class="close-search" data-feather="x"></i>
              </div>
              <div class="Typeahead-menu"></div>
            </div>
          </div>
        </form>
        <div class="header-logo-wrapper col-auto p-0">
          <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i></div>
          <div class="logo-header-main"><a href="{{route('mother_dashboard')}}"><img class="img-fluid for-light img-100"
                src="../assets/images/logo/logo2.png" alt=""><img class="img-fluid for-dark"
                src="../assets/images/logo/logo.png" alt=""></a></div>
        </div>
        <div class="left-header col horizontal-wrapper ps-0">
          <div class="left-menu-header">
            <ul class="app-list">
              <li class="onhover-dropdown">
                <div class="app-menu"> <i data-feather="folder-plus"></i></div>
                <ul class="onhover-show-div left-dropdown">
                  <li> <a href="file-manager.html">File Manager</a></li>
                  <li> <a href="kanban.html"> Kanban board</a></li>
                  <li> <a href="social-app.html"> Social App</a></li>
                  <li> <a href="bookmark.html"> Bookmark</a></li>
                </ul>
              </li>
            </ul>
         
          </div>
        </div>
        <div class="nav-right col-6 pull-right right-header p-0">
          <ul class="nav-menus">
            <li class="serchinput">
              <div class="serchbox"><i data-feather="search"></i></div>
              <div class="form-group search-form">
                <input type="text" placeholder="Search here...">
              </div>
            </li>
            <li>
              <div class="mode"><i class="fas fa-moon-o"></i></div>
            </li>
            <li class="onhover-dropdown">
              <div class="notification-box"><i data-feather="bell"></i></div>
              <ul class="notification-dropdown onhover-show-div">
                <li><i data-feather="bell"> </i>
                  <h6 class="f-18 mb-0">Notitications</h6>
                </li>
                <li>
                  <div class="d-flex align-items-center">
                    <div class="flex-shrink-0"><i data-feather="truck"></i></div>
                    <div class="flex-grow-1">
                      <p><a href="order-history.html">Delivery processing </a><span class="pull-right">6 hr</span></p>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="d-flex align-items-center">
                    <div class="flex-shrink-0"><i data-feather="shopping-cart"></i></div>
                    <div class="flex-grow-1">
                      <p><a href="cart.html">Order Complete</a><span class="pull-right">3 hr</span></p>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="d-flex align-items-center">
                    <div class="flex-shrink-0"><i data-feather="file-text"></i></div>
                    <div class="flex-grow-1">
                      <p><a href="invoice-template.html">Tickets Generated</a><span class="pull-right">1 hr</span></p>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="d-flex align-items-center">
                    <div class="flex-shrink-0"><i data-feather="send"></i></div>
                    <div class="flex-grow-1">
                      <p><a href="email_inbox.html">Delivery Complete</a><span class="pull-right">45 min</span></p>
                    </div>
                  </div>
                </li>
                <li><a class="btn btn-primary" href="javascript:void(0)">Check all notification</a></li>
              </ul>
            </li>
           
            <li class="maximize"><a href="#!" onclick="javascript:toggleFullScreen()"><i
                  data-feather="maximize-2"></i></a></li>
           
            <li class="profile-nav onhover-dropdown">
              <div class="account-user"><i data-feather="user"></i></div>
              <ul class="profile-dropdown onhover-show-div">
                <li><a href="user-profile.html"><i data-feather="user"></i><span>Account</span></a></li>
                <li><a href="login.html"><i data-feather="log-in"> </i><span>Log in</span></a></li>
              </ul>
            </li>
          </ul>
        </div>
        <script class="result-template" type="text/x-handlebars-template">
            <div class="ProfileCard u-cf">                        
            <div class="ProfileCard-avatar"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay m-0"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg></div>
            <div class="ProfileCard-details">
            <div class="ProfileCard-realName"></div>
            </div>
            </div>
          </script>
        <script class="empty-template"
          type="text/x-handlebars-template"><div class="EmptyMessage">Your search turned up 0 results. This most likely means the backend is down, yikes!</div></script>
      </div>
    </div>
    <!-- Page Header Ends-->
    <!-- Page Body Start-->
    <div class="page-body-wrapper">
      <!-- Page Sidebar Start-->
      <div class="sidebar-wrapper">
        <div>
          <div class="logo-wrapper"><a href="{{route('mother_dashboard')}}"><img class="img-fluid for-light"
                src="../assets/images/logo/logo.png" alt=""></a>
            <div class="back-btn"><i data-feather="grid"></i></div>
            <div class="toggle-sidebar icon-box-sidebar"><i class="status_toggle middle sidebar-toggle"
                data-feather="grid"> </i></div>
          </div>
          <div class="logo-icon-wrapper"><a href="">
              <div class="icon-box-sidebar"><i data-feather="grid"></i></div>
            </a></div>
          <nav class="sidebar-main">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="sidebar-menu">
              <ul class="sidebar-links" id="simple-bar">
                <li class="back-btn">
                  <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2"
                      aria-hidden="true"></i></div>
                </li>
                
                <li class="menu-box">
                  <ul>
                    <li class="sidebar-list"> <a class="sidebar-link sidebar-title" href="{{route('mother_dashboard')}}">
                      <i data-feather="box"></i><span>Dashboard </span></a>
                    </li>
                    
                    <li class="sidebar-list" ><a class="sidebar-link sidebar-title link-nav" href="{{route('Customer_Details.list')}}">
                      <i data-feather="users"></i><span>Customer</span></a></li>

                      <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="{{route('Category_Details.list')}}"><i
                        data-feather="list"> </i><span>Category Name</span></a></li>

                      <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="{{route('Unit_Details.list')}}">
                        <i data-feather="archive"></i><span>Unit Name</span></a></li>
                        
                      <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="{{route('Medicine_Type_Details.list')}}">
                        <i data-feather="codepen"> </i><span>Medicine Type</span></a></li>

                      <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="{{route('LeafType_Details.list')}}">
                          <i data-feather="feather"> </i><span>Leaf Type</span></a></li>
                          
                      <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="{{route('Manufacturer_Details.list')}}">
                        <i data-feather="users"> </i><span>Manufacturer</span></a></li>

                      <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="{{route('Medicine_Details.create')}}">
                          <i data-feather="users"> </i><span>Medicine</span></a></li>
                  </ul>
                </li>
              </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
          </nav>
        </div>
      </div>
      <!-- Page Sidebar Ends-->

     
      @yield('content')

    
    </div>
  </div>
  <!-- latest jquery-->
 <script src="{{asset('assets/js/jquery-3.6.0.min.js')}}"></script>
  <!-- Bootstrap js-->
 <script src="{{asset('assets/js/bootstrap/bootstrap.bundle.min.js')}}"></script>
 <script src="https://kit.fontawesome.com/0b0b3b6ec1.js" crossorigin="anonymous"></script>
  <!-- feather icon js-->
 <script src="{{asset('assets/js/icons/feather-icon/feather.min.js')}}"></script>
 <script src="{{asset('assets/js/icons/feather-icon/feather-icon.js')}}"></script>
  <!-- scrollbar js-->
 <script src="{{asset('assets/js/scrollbar/simplebar.js')}}"></script>
 <script src="{{asset('assets/js/scrollbar/custom.js')}}"></script>
  <!-- Sidebar jquery-->
 <script src="{{asset('assets/js/config.js')}}"></script>
 <script src="{{asset('assets/js/sidebar-menu.js')}}"></script>
 <script src="{{asset('assets/js/chart/chartist/chartist.js')}}"></script>
 <script src="{{asset('assets/js/chart/chartist/chartist-plugin-tooltip.js')}}"></script>
 <script src="{{asset('assets/js/chart/apex-chart/apex-chart.js')}}"></script>
 <script src="{{asset('assets/js/chart/apex-chart/stock-prices.js')}}"></script>
 <script src="{{asset('assets/js/clipboard/clipboard.min.js')}}"></script>
 <script src="{{asset('assets/js/custom-card/custom-card.js')}}"></script>

 <script src="{{asset('assets/js/vector-map/jquery-jvectormap-2.0.2.min.js')}}"></script>
 <script src="{{asset('assets/js/vector-map/map/jquery-jvectormap-world-mill-en.js')}}"></script>
 <script src="{{asset('assets/js/vector-map/map/jquery-jvectormap-us-aea-en.js')}}"></script>
 <script src="{{asset('assets/js/vector-map/map/jquery-jvectormap-uk-mill-en.js')}}"></script>
 <script src="{{asset('assets/js/vector-map/map/jquery-jvectormap-au-mill.js')}}"></script>
 <script src="{{asset('assets/js/vector-map/map/jquery-jvectormap-chicago-mill-en.js')}}"></script>
 <script src="{{asset('assets/js/vector-map/map/jquery-jvectormap-in-mill.js')}}"></script>
 <script src="{{asset('assets/js/vector-map/map/jquery-jvectormap-asia-mill.js')}}"></script>
 <script src="{{asset('assets/js/dashboard/default.js')}}"></script>
 <script src="{{asset('assets/js/notify/index.js')}}"></script>
 <script src="{{asset('assets/js/typeahead/handlebars.js')}}"></script>
 <script src="{{asset('assets/js/typeahead/typeahead.bundle.js')}}"></script>
 <script src="{{asset('assets/js/typeahead/typeahead.custom.js')}}"></script>
 <script src="{{asset('assets/js/typeahead-search/handlebars.js')}}"></script>
  <!-- Template js-->
 <script src="{{asset('assets/js/script.js')}}"></script>
  
   <script src="{{asset('assets/js/tooltip-init.js')}}"></script>
 <script src="{{asset('assets/js/typeahead-search/typeahead-custom.js')}}"></script>
 <script src="{{asset('assets/js/datatable/datatables/jquery.dataTables.min.js')}}"></script>
 <script src="{{asset('assets/js/datatable/datatable-extension/dataTables.buttons.min.js')}}"></script>
 <script src="{{asset('assets/js/datatable/datatable-extension/jszip.min.js')}}"></script>
 <script src="{{asset('assets/js/datatable/datatable-extension/pdfmake.min.js')}}"></script>
 <script src="{{asset('assets/js/datatable/datatable-extension/vfs_fonts.js')}}"></script>
 <script src="{{asset('assets/js/datatable/datatable-extension/dataTables.autoFill.min.js')}}"></script>
 <script src="{{asset('assets/js/datatable/datatable-extension/dataTables.select.min.js')}}"></script>
 <script src="{{asset('assets/js/datatable/datatable-extension/buttons.bootstrap4.min.js')}}"></script>
 <script src="{{asset('assets/js/datatable/datatable-extension/buttons.html5.min.js')}}"></script>
 <script src="{{asset('assets/js/datatable/datatable-extension/buttons.print.min.js')}}"></script>
 <script src="{{asset('assets/js/datatable/datatable-extension/dataTables.bootstrap4.min.js')}}"></script>
 <script src="{{asset('assets/js/datatable/datatable-extension/dataTables.responsive.min.js')}}"></script>
 <script src="{{asset('assets/js/datatable/datatable-extension/responsive.bootstrap4.min.js')}}"></script>
 <script src="{{asset('assets/js/datatable/datatable-extension/dataTables.keyTable.min.js')}}"></script>
 <script src="{{asset('assets/js/datatable/datatable-extension/dataTables.colReorder.min.js')}}"></script>
 <script src="{{asset('assets/js/datatable/datatable-extension/dataTables.fixedHeader.min.js')}}"></script>
 <script src="{{asset('assets/js/datatable/datatable-extension/dataTables.rowReorder.min.js')}}"></script>
 <script src="{{asset('assets/js/datatable/datatable-extension/dataTables.scroller.min.js')}}"></script>
 <script src="{{asset('assets/js/datatable/datatable-extension/custom.js')}}"></script>
  <!-- login js-->

  <script src="{{asset('assets/js/datepicker/date-picker/datepicker.js')}}"></script>
  <script src="{{asset('assets/js/datepicker/date-picker/datepicker.en.js')}}"></script>
  <script src="{{asset('assets/js/datepicker/date-picker/datepicker.custom.js')}}"></script>
  <script src="{{asset('assets/js/select2/select2.full.min.js')}}"></script>
  <script src="{{asset('assets/js/select2/select2-custom.js')}}"></script>

</body>

</html>