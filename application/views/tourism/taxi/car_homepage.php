<!doctype html>
<html lang="en">
    <head>
        <title>Car Homepage</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="icon" href="<?=INCLUDE_ASSETS?>images/favicon.png" type="image/x-icon">
        
        <!-- Google Fonts -->	
        <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i,900,900i%7CMerriweather:300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
        
        <!-- Bootstrap Stylesheet -->	
        <link rel="stylesheet" href="<?=INCLUDE_ASSETS?>css/bootstrap.min.css">
        
        <!-- Font Awesome Stylesheet -->
        <link rel="stylesheet" href="<?=INCLUDE_ASSETS?>css/font-awesome.min.css">
            
        <!-- Custom Stylesheets -->	
        <link rel="stylesheet" href="<?=INCLUDE_ASSETS?>css/style.css">
        <link rel="stylesheet" id="cpswitch" href="<?=INCLUDE_ASSETS?>css/orange.css">
        <link rel="stylesheet" href="<?=INCLUDE_ASSETS?>css/responsive.css">
    
        <!-- Owl Carousel Stylesheet -->
        <link rel="stylesheet" href="<?=INCLUDE_ASSETS?>css/owl.carousel.css">
        <link rel="stylesheet" href="<?=INCLUDE_ASSETS?>css/owl.theme.css">
        
        <!-- Flex Slider Stylesheet -->
        <link rel="stylesheet" href="<?=INCLUDE_ASSETS?>css/flexslider.css" type="text/css" />
        
        <!--Date-Picker Stylesheet-->
        <link rel="stylesheet" href="<?=INCLUDE_ASSETS?>css/datepicker.css">
    </head>
    
    
    <body id="car-homepage">
    
        <!--====== LOADER =====-->
        <div class="loader"></div>
    
    
    	<!--======== SEARCH-OVERLAY =========-->       
        <div class="overlay">
            <a href="javascript:void(0)" id="close-button" class="closebtn">&times;</a>
            <div class="overlay-content">
                <div class="form-center">
                    <form>
                    	<div class="form-group">
                        	<div class="input-group">
                        		<input type="text" class="form-control" placeholder="Search..." required />
                            	<span class="input-group-btn"><button type="submit" class="btn"><span><i class="fa fa-search"></i></span></button></span>
                            </div><!-- end input-group -->
                        </div><!-- end form-group -->
                    </form>
                </div><!-- end form-center -->
            </div><!-- end overlay-content -->
        </div><!-- end overlay -->
        
		
        <!--============= TOP-BAR ===========-->
        <div id="top-bar" class="tb-text-grey">
            <div class="container">
                <div class="row">          
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <div id="info">
                            <ul class="list-unstyled list-inline">
                                <li><span><i class="fa fa-map-marker"></i></span>29 Land St, Lorem City, CA</li>
                                <li><span><i class="fa fa-phone"></i></span>+00 123 4567</li>
                            </ul>
                        </div><!-- end info -->
                    </div><!-- end columns -->
                    
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <div id="links">
                            <ul class="list-unstyled list-inline">
                                <li><a href="login.html"><span><i class="fa fa-lock"></i></span>Login</a></li>
                                <li><a href="registration.html"><span><i class="fa fa-plus"></i></span>Sign Up</a></li>
                                <li>
                                	<form>
                                    	<ul class="list-inline">
                                        	<li>
                                                <div class="form-group currency">
                                                    <span><i class="fa fa-angle-down"></i></span>
                                                    <select class="form-control">
                                                        <option value="">$</option>
                                                        <option value="">£</option>
                                                    </select>
                                                </div><!-- end form-group -->
											</li>
                                            
                                            <li>
                                                <div class="form-group language">
                                                    <span><i class="fa fa-angle-down"></i></span>
                                                    <select class="form-control">
                                                        <option value="">EN</option>
                                                        <option value="">UR</option>
                                                        <option value="">FR</option>
                                                        <option value="">IT</option>
                                                    </select>
                                                </div><!-- end form-group -->
                                            </li>
										</ul>
                                    </form>
                                </li>
                            </ul>
                        </div><!-- end links -->
                    </div><!-- end columns -->				
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end top-bar -->


		<!--========================= FLEX SLIDER =====================-->
        <section class="flexslider-container" id="flexslider-container-3">
        	
            <div class="header-absolute">
                <nav class="navbar navbar-default main-navbar navbar-custom navbar-black" id="mynavbar">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" id="menu-button">
                              <span class="icon-bar"></span>
                              <span class="icon-bar"></span>
                              <span class="icon-bar"></span>                        
                            </button>
                            <div class="header-search hidden-lg">
                                <a href="javascript:void(0)" class="search-button"><span><i class="fa fa-search"></i></span></a>
                            </div>
                            <a href="#" class="navbar-brand"><span><i class="fa fa-plane"></i>STAR</span>TRAVELS</a>
                        </div><!-- end navbar-header -->
                    
                        <div class="collapse navbar-collapse" id="myNavbar1">
                            <ul class="nav navbar-nav navbar-right">
                                <li class="dropdown active"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Home<span><i class="fa fa-angle-down"></i></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="index.html">Main Homepage</a></li>
                                        <li><a href="flight-homepage.html">Flight Homepage</a></li>
                                        <li><a href="hotel-homepage.html">Hotel Homepage</a></li>
                                        <li><a href="tour-homepage.html">Tour Homepage</a></li>
                                        <li><a href="cruise-homepage.html">Cruise Homepage</a></li>
                                        <li class="active"><a href="#">Car Homepage</a></li>
                                        <li><a href="landing-page.html">Landing Page</a></li>
                                    </ul>			
                                </li>
                                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Flights<span><i class="fa fa-angle-down"></i></span></a>
                                    <ul class="dropdown-menu">
                                    	<li><a href="flight-homepage.html">Flight Homepage</a></li>
                                        <li><a href="flight-listing-left-sidebar.html">List View Left Sidebar</a></li>
                                        <li><a href="flight-listing-right-sidebar.html">List View Right Sidebar</a></li>
                                        <li><a href="flight-grid-left-sidebar.html">Grid View Left Sidebar</a></li>
                                        <li><a href="flight-grid-right-sidebar.html">Grid View Right Sidebar</a></li>
                                        <li><a href="flight-detail-left-sidebar.html">Detail Left Sidebar</a></li>
                                        <li><a href="flight-detail-right-sidebar.html">Detail Right Sidebar</a></li>
                                    </ul>			
                                </li>
                                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Hotels<span><i class="fa fa-angle-down"></i></span></a>
                                    <ul class="dropdown-menu">
                                    	<li><a href="hotel-homepage.html">Hotel Homepage</a></li>
                                        <li><a href="hotel-listing-left-sidebar.html">List View Left Sidebar</a></li>
                                        <li><a href="hotel-listing-right-sidebar.html">List View Right Sidebar</a></li>
                                        <li><a href="hotel-grid-left-sidebar.html">Grid View Left Sidebar</a></li>
                                        <li><a href="hotel-grid-right-sidebar.html">Grid View Right Sidebar</a></li>
                                        <li><a href="hotel-detail-left-sidebar.html">Detail Left Sidebar</a></li>
                                        <li><a href="hotel-detail-right-sidebar.html">Detail Right Sidebar</a></li>
                                    </ul>			
                                </li>
                                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Tours<span><i class="fa fa-angle-down"></i></span></a>
                                    <ul class="dropdown-menu">
                                    	<li><a href="tour-homepage.html">Tour Homepage</a></li>
                                        <li><a href="tour-listing-left-sidebar.html">List View Left Sidebar</a></li>
                                        <li><a href="tour-listing-right-sidebar.html">List View Right Sidebar</a></li>
                                        <li><a href="tour-grid-left-sidebar.html">Grid View Left Sidebar</a></li>
                                        <li><a href="tour-grid-right-sidebar.html">Grid View Right Sidebar</a></li>
                                        <li><a href="tour-detail-left-sidebar.html">Detail Left Sidebar</a></li>
                                        <li><a href="tour-detail-right-sidebar.html">Detail Right Sidebar</a></li>
                                    </ul>			
                                </li>
                                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Cruise<span><i class="fa fa-angle-down"></i></span></a>
                                    <ul class="dropdown-menu">
                                    	<li><a href="cruise-homepage.html">Cruise Homepage</a></li>
                                        <li><a href="cruise-listing-left-sidebar.html">List View Left Sidebar</a></li>
                                        <li><a href="cruise-listing-right-sidebar.html">List View Right Sidebar</a></li>
                                        <li><a href="cruise-grid-left-sidebar.html">Grid View Left Sidebar</a></li>
                                        <li><a href="cruise-grid-right-sidebar.html">Grid View Right Sidebar</a></li>
                                        <li><a href="cruise-detail-left-sidebar.html">Detail Left Sidebar</a></li>
                                        <li><a href="cruise-detail-right-sidebar.html">Detail Right Sidebar</a></li>
                                    </ul>			
                                </li>
                                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Cars<span><i class="fa fa-angle-down"></i></span></a>
                                    <ul class="dropdown-menu">
                                    	<li><a href="car-homepage.html">Car Homepage</a></li>
                                        <li><a href="car-listing-left-sidebar.html">List View Left Sidebar</a></li>
                                        <li><a href="car-listing-right-sidebar.html">List View Right Sidebar</a></li>
                                        <li><a href="car-grid-left-sidebar.html">Grid View Left Sidebar</a></li>
                                        <li><a href="car-grid-right-sidebar.html">Grid View Right Sidebar</a></li>
                                        <li><a href="car-detail-left-sidebar.html">Detail Left Sidebar</a></li>
                                        <li><a href="car-detail-right-sidebar.html">Detail Right Sidebar</a></li>
                                    </ul>			
                                </li>
                                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages<span><i class="fa fa-angle-down"></i></span></a>
                                    <ul class="dropdown-menu mega-dropdown-menu row">
                                        <li>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <ul class="list-unstyled">
                                                        <li class="dropdown-header">Standard <span>Pages</span></li>
                                                        <li><a href="about-us.html">About Us</a></li>
                                                        <li><a href="contact-us.html">Contact Us</a></li>
                                                        <li><a href="blog-listing-left-sidebar.html">Blog Listing Left Sidebar</a></li>
                                                        <li><a href="blog-listing-right-sidebar.html">Blog Listing Right Sidebar</a></li>
                                                        <li><a href="blog-detail-left-sidebar.html">Blog Detail Left Sidebar</a></li>
                                                        <li><a href="blog-detail-right-sidebar.html">Blog Detail Right Sidebar</a></li>
                                                    </ul>
                                                </div>
                                                
                                                <div class="col-md-3">
                                                    <ul class="list-unstyled">	
                                                        <li class="dropdown-header">User <span>Dashboard</span></li>
                                                        <li><a href="dashboard.html">Dashboard</a></li>
                                                        <li><a href="user-profile.html">User Profile</a></li>
                                                        <li><a href="booking.html">Booking</a></li>
                                                        <li><a href="wishlist.html">Wishlist</a></li>
                                                        <li><a href="cards.html">Cards</a></li>
                                                    </ul>
                                                </div>
                                                
                                                <div class="col-md-3">
                                                    <ul class="list-unstyled">
                                                        <li class="dropdown-header">Special <span>Pages</span></li>
                                                        <li><a href="login.html">Login</a></li>
                                                        <li><a href="registration.html">Registration</a></li>
                                                        <li><a href="forgot-password.html">Forgot Password</a></li>
                                                        <li><a href="error-page.html">404 Page</a></li>
                                                        <li><a href="coming-soon.html">Coming Soon</a></li>   
                                                    </ul>
                                                </div>
                                                
                                                <div class="col-md-3">
                                                    <ul class="list-unstyled">
                                                        <li class="dropdown-header">Extra <span>Pages</span></li>
                                                        <li><a href="before-you-fly.html">Before Fly</a></li>
                                                        <li><a href="travel-insurance.html">Travel Insurance</a></li>
                                                        <li><a href="holidays.html">Holidays</a></li>
                                                        <li><a href="thank-you.html">Thank You</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>			
                                </li>
                                <li><a href="javascript:void(0)" class="search-button"><span><i class="fa fa-search"></i></span></a></li>
                            </ul>
                        </div><!-- end navbar collapse -->
                    </div><!-- end container -->
                 </nav><!-- end navbar -->
        	</div><!-- end header-absolute -->
            
            <div class="sidenav-content">
                <div id="mySidenav" class="sidenav" >
                    <h2 id="web-name"><span><i class="fa fa-plane"></i></span>Star Travel</h2>
    
                    <div id="main-menu">
                        <div class="closebtn">
                            <button class="btn btn-default" id="closebtn">&times;</button>
                        </div><!-- end close-btn -->
                        
                        <div class="list-group panel">
                        
                            <a href="#home-links" class="list-group-item active" data-toggle="collapse" data-parent="#main-menu"><span><i class="fa fa-home link-icon"></i></span>Home<span><i class="fa fa-chevron-down arrow"></i></span></a>
                            <div class="collapse sub-menu" id="home-links">
                                <a href="index.html" class="list-group-item">Main Homepage</a>
                                <a href="flight-homepage.html" class="list-group-item">Flight Homepage</a>
                                <a href="hotel-homepage.html" class="list-group-item">Hotel Homepage</a>
                                <a href="tour-homepage.html" class="list-group-item">Tour Homepage</a>
                                <a href="cruise-homepage.html" class="list-group-item">Cruise Homepage</a>
                                <a href="#" class="list-group-item active">Car Homepage</a>
                                <a href="landing-page.html" class="list-group-item">Landing Page</a>
                            </div><!-- end sub-menu -->
                            
                            <a href="#flights-links" class="list-group-item" data-toggle="collapse" data-parent="#main-menu"><span><i class="fa fa-plane link-icon"></i></span>Flights<span><i class="fa fa-chevron-down arrow"></i></span></a>
                            <div class="collapse sub-menu" id="flights-links">
                                <a href="flight-homepage.html" class="list-group-item">Flight Homepage</a>
                                <a href="flight-listing-left-sidebar.html" class="list-group-item">List View Left Sidebar</a>
                                <a href="flight-listing-right-sidebar.html" class="list-group-item">List View Right Sidebar</a>
                                <a href="flight-grid-left-sidebar.html" class="list-group-item">Grid View Left Sidebar</a>
                                <a href="flight-grid-right-sidebar.html" class="list-group-item">Grid View Right Sidebar</a>
                                <a href="flight-detail-left-sidebar.html" class="list-group-item">Detail Left Sidebar</a>
                                <a href="flight-detail-right-sidebar.html" class="list-group-item">Detail Right Sidebar</a>
                            </div><!-- end sub-menu -->
                            
                            <a href="#hotels-links" class="list-group-item" data-toggle="collapse" data-parent="#main-menu"><span><i class="fa fa-building link-icon"></i></span>Hotels<span><i class="fa fa-chevron-down arrow"></i></span></a>
                            <div class="collapse sub-menu" id="hotels-links">
                                <a href="hotel-homepage.html" class="list-group-item">Hotel Homepage</a>
                                <a href="hotel-listing-left-sidebar.html" class="list-group-item">List View Left Sidebar</a>
                                <a href="hotel-listing-right-sidebar.html" class="list-group-item">List View Right Sidebar</a>
                                <a href="hotel-grid-left-sidebar.html" class="list-group-item">Grid View Left Sidebar</a>
                                <a href="hotel-grid-right-sidebar.html" class="list-group-item">Grid View Right Sidebar</a>
                                <a href="hotel-detail-left-sidebar.html" class="list-group-item">Detail Left Sidebar</a>
                                <a href="hotel-detail-right-sidebar.html" class="list-group-item">Detail Right Sidebar</a>
                            </div><!-- end sub-menu -->
                            
                            <a href="#tours-links" class="list-group-item" data-toggle="collapse" data-parent="#main-menu"><span><i class="fa fa-globe link-icon"></i></span>Tours<span><i class="fa fa-chevron-down arrow"></i></span></a>
                            <div class="collapse sub-menu" id="tours-links">
                                <a href="tour-homepage.html" class="list-group-item">Tour Homepage</a>
                                <a href="tour-listing-left-sidebar.html" class="list-group-item">List View Left Sidebar</a>
                                <a href="tour-listing-right-sidebar.html" class="list-group-item">List View Right Sidebar</a>
                                <a href="tour-grid-left-sidebar.html" class="list-group-item">Grid View Left Sidebar</a>
                                <a href="tour-grid-right-sidebar.html" class="list-group-item">Grid View Right Sidebar</a>
                                <a href="tour-detail-left-sidebar.html" class="list-group-item">Detail Left Sidebar</a>
                                <a href="tour-detail-right-sidebar.html" class="list-group-item">Detail Right Sidebar</a>
                            </div><!-- end sub-menu -->
                            
                            <a href="#cruise-links" class="list-group-item" data-toggle="collapse" data-parent="#main-menu"><span><i class="fa fa-ship link-icon"></i></span>Cruise<span><i class="fa fa-chevron-down arrow"></i></span></a>
                            <div class="collapse sub-menu" id="cruise-links">
                                <a href="cruise-homepage.html" class="list-group-item">Cruise Homepage</a>
                                <a href="cruise-listing-left-sidebar.html" class="list-group-item">List View Left Sidebar</a>
                                <a href="cruise-listing-right-sidebar.html" class="list-group-item">List View Right Sidebar</a>
                                <a href="cruise-grid-left-sidebar.html" class="list-group-item">Grid View Left Sidebar</a>
                                <a href="cruise-grid-right-sidebar.html" class="list-group-item">Grid View Right Sidebar</a>
                                <a href="cruise-detail-left-sidebar.html" class="list-group-item">Detail Left Sidebar</a>
                                <a href="cruise-detail-right-sidebar.html" class="list-group-item">Detail Right Sidebar</a>
                            </div><!-- end sub-menu -->
                            
                            <a href="#cars-links" class="list-group-item" data-toggle="collapse" data-parent="#main-menu"><span><i class="fa fa-car link-icon"></i></span>Cars<span><i class="fa fa-chevron-down arrow"></i></span></a>
                            <div class="collapse sub-menu" id="cars-links">
                                <a href="car-homepage.html" class="list-group-item">Car Homepage</a>
                                <a href="car-listing-left-sidebar.html" class="list-group-item">List View Left Sidebar</a>
                                <a href="car-listing-right-sidebar.html" class="list-group-item">List View Right Sidebar</a>
                                <a href="car-grid-left-sidebar.html" class="list-group-item">Grid View Left Sidebar</a>
                                <a href="car-grid-right-sidebar.html" class="list-group-item">Grid View Right Sidebar</a>
                                <a href="car-detail-left-sidebar.html" class="list-group-item">Detail Left Sidebar</a>
                                <a href="car-detail-right-sidebar.html" class="list-group-item">Detail Right Sidebar</a>
                            </div><!-- end sub-menu -->
                            
                            <a href="#pages-links" class="list-group-item" data-toggle="collapse" data-parent="#main-menu"><span><i class="fa fa-clone link-icon"></i></span>Pages<span><i class="fa fa-chevron-down arrow"></i></span></a>
                            <div class="collapse sub-menu" id="pages-links">
                                <div class="list-group-heading list-group-item">Standard <span>Pages</span></div>
                                <a href="about-us.html"  class="list-group-item">About Us</a>
                                <a href="contact-us.html"  class="list-group-item">Contact Us</a>
                                <a href="blog-listing-left-sidebar.html"  class="list-group-item">Blog Listing Left Sidebar</a>
                                <a href="blog-listing-right-sidebar.html"  class="list-group-item">Blog Listing Right Sidebar</a>
                                <a href="blog-detail-left-sidebar.html"  class="list-group-item">Blog Detail Left Sidebar</a>
                                <a href="blog-detail-right-sidebar.html"  class="list-group-item">Blog Detail Right Sidebar</a>
                                <div class="list-group-heading list-group-item">User <span>Dashboard</span></div>
                                <a href="dashboard.html"  class="list-group-item">Dashboard</a>
                                <a href="user-profile.html"  class="list-group-item">User Profile</a>
                                <a href="booking.html"  class="list-group-item">Booking</a>
                                <a href="wishlist.html"  class="list-group-item">Wishlist</a>
                                <a href="cards.html"  class="list-group-item">Cards</a>
                                <div class="list-group-heading list-group-item">Special <span>Pages</span></div>
                                <a href="login.html"  class="list-group-item">Login</a>
                                <a href="registration.html"  class="list-group-item">Registration</a>
                                <a href="forgot-password.html"  class="list-group-item">Forgot Password</a>
                                <a href="error-page.html"  class="list-group-item">404 Page</a>
                                <a href="coming-soon.html"  class="list-group-item">Coming Soon</a>
                                <div class="list-group-heading list-group-item">Extra <span>Pages</span></div>
                                <a href="before-you-fly.html" class="list-group-item">Before Fly</a>
                                <a href="travel-insurance.html" class="list-group-item">Travel Insurance</a>
                                <a href="holidays.html" class="list-group-item">Holidays</a>
                                <a href="thank-you.html" class="list-group-item">Thank You</a>
                            </div><!-- end sub-menu -->
                        </div><!-- end list-group -->
                    </div><!-- end main-menu -->
                </div><!-- end mySidenav -->
            </div><!-- end sidenav-content -->
        
            <div class="flexslider slider" id="slider-3">
                <ul class="slides">
                    
                    <li class="item-1 back-size" style="background:			linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)),url(images/car-slider-1.jpg) 50% 65%;
	background-size:cover;
	height:100%;">
                    </li><!-- end item-1 -->
                    
                    <li class="item-2 back-size" style="background:			linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)),url(images/car-slider-1.jpg) 50% 65%;
	background-size:cover;
	height:100%;">
                    </li><!-- end item-2 -->
                   
                </ul>
            </div><!-- end slider -->
            
            <div class="search-tabs" id="search-tabs-3">
            	<div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 no-pd-r">
                        
                            <ul class="nav nav-tabs">
                                <li><a href="#flights" data-toggle="tab"><span><i class="fa fa-plane"></i></span><span class="st-text">Flights</span></a></li>
                                <li><a href="#hotels" data-toggle="tab"><span><i class="fa fa-building"></i></span><span class="st-text">Hotels</span></a></li>
                                <li><a href="#tours" data-toggle="tab"><span><i class="fa fa-suitcase"></i></span><span class="st-text">Tours</span></a></li>
                                <li><a href="#cruise" data-toggle="tab"><span><i class="fa fa-ship"></i></span><span class="st-text">Cruise</span></a></li>
                                <li class="active"><a href="#cars" data-toggle="tab"><span><i class="fa fa-car"></i></span><span class="st-text">Cars</span></a></li>
                            </ul>

                            <div class="tab-content">

                                <div id="flights" class="tab-pane">
                                    <form>
                                        <div class="row">

                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                <div class="row">
                                                
                                                    <div class="col-xs-12 col-sm-6 col-md-6">
                                                        <div class="form-group left-icon">
                                                            <label>From</label>
                                                            <input type="text" class="form-control" placeholder="City, Country" >
                                                            <i class="fa fa-map-marker"></i>
                                                        </div>
                                                    </div><!-- end columns -->
                                                    
                                                    <div class="col-xs-12 col-sm-6 col-md-6">
                                                        <div class="form-group left-icon">
                                                            <label>To</label>
                                                            <input type="text" class="form-control" placeholder="City, Country" >
                                                            <i class="fa fa-map-marker"></i>
                                                        </div>
                                                    </div><!-- end columns -->
        
                                                </div><!-- end row -->								
                                            </div><!-- end columns -->
                                            
                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                <div class="row">
                                                
                                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                                        <div class="form-group left-icon">
                                                            <label>Check In</label>
                                                            <input type="text" class="form-control dpd1" placeholder="mm/dd/yy" >
                                                            <i class="fa fa-calendar"></i>
                                                        </div>
                                                    </div><!-- end columns -->
                                                    
                                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                                        <div class="form-group left-icon">
                                                            <label>Check Out</label>
                                                            <input type="text" class="form-control dpd2" placeholder="mm/dd/yy" >
                                                            <i class="fa fa-calendar"></i>
                                                        </div>
                                                    </div><!-- end columns -->
        
                                                </div><!-- end row -->								
                                            </div><!-- end columns -->
                                            
                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                <div class="form-group right-icon">
                                                    <label>Adults</label>
                                                    <select class="form-control">
                                                        <option selected>01</option>
                                                        <option>02</option>
                                                        <option>03</option>
                                                        <option>04</option>
                                                    </select>
                                                    <i class="fa fa-angle-down"></i>
                                                </div>
                                            </div><!-- end columns -->
                                            
                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 search-btn">
                                                <button class="btn btn-orange">Search</button>
                                            </div><!-- end columns -->
                                            
                                        </div><!-- end row -->
                                    </form>
                                </div><!-- end flights -->
                                
                                <div id="hotels" class="tab-pane">
                                    <form>
                                        <div class="row">
                                            
                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                <div class="row">
                                                
                                                    <div class="col-xs-12 col-sm-6">
                                                        <div class="form-group left-icon">
                                                            <label>Check In</label>
                                                            <input type="text" class="form-control dpd1" placeholder="Check In" >
                                                            <i class="fa fa-calendar"></i>
                                                        </div>
                                                    </div><!-- end columns -->
                                                    
                                                    <div class="col-xs-12 col-sm-6">
                                                        <div class="form-group left-icon">
                                                            <label>Check Out</label>
                                                            <input type="text" class="form-control dpd2" placeholder="Check Out" >
                                                            <i class="fa fa-calendar"></i>
                                                        </div>
                                                    </div><!-- end columns -->
        
                                                </div><!-- end row -->								
                                            </div><!-- end columns -->
                                            
                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                <div class="row">
                                                
                                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                                        <div class="form-group right-icon">
                                                            <label>Rooms</label>
                                                            <select class="form-control">
                                                                <option selected>01</option>
                                                                <option>02</option>
                                                                <option>03</option>
                                                                <option>04</option>
                                                            </select>
                                                            <i class="fa fa-angle-down"></i>
                                                        </div>
                                                    </div><!-- end columns -->
                                                    
                                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                                        <div class="form-group right-icon">
                                                            <label>Adults</label>
                                                            <select class="form-control">
                                                                <option selected>01</option>
                                                                <option>02</option>
                                                                <option>03</option>
                                                                <option>04</option>
                                                            </select>
                                                            <i class="fa fa-angle-down"></i>
                                                        </div>
                                                    </div><!-- end columns -->
                                                    
                                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                                        <div class="form-group right-icon">
                                                            <label>Kids</label>
                                                            <select class="form-control">
                                                                <option selected>01</option>
                                                                <option>02</option>
                                                                <option>03</option>
                                                                <option>04</option>
                                                            </select>
                                                            <i class="fa fa-angle-down"></i>
                                                        </div>
                                                    </div><!-- end columns -->
                                                    
                                                </div><!-- end row -->
                                            </div><!-- end columns -->
                                            
                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 search-btn">
                                                <button class="btn btn-orange">Search</button>
                                            </div><!-- end columns -->
                                            
                                        </div><!-- end row -->
                                    </form>
                                </div><!-- end hotels -->

                                <div id="tours" class="tab-pane">
                                    <form>
                                        <div class="row">
                                        
                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                <div class="form-group left-icon">
                                                    <label>Your Destination</label>
                                                    <input type="text" class="form-control" placeholder="City, Country" />
                                                    <i class="fa fa-map-marker"></i>
                                                </div>
                                            </div><!-- end columns -->
                                            
                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                <div class="form-group right-icon">
                                                    <label>Month</label>
                                                    <select class="form-control">
                                                        <option selected>January</option>
                                                        <option>February</option>
                                                        <option>March</option>
                                                        <option>April</option>
                                                        <option>May</option>
                                                        <option>June</option>
                                                        <option>July</option>
                                                        <option>August</option>
                                                        <option>September</option>
                                                        <option>October</option>
                                                        <option>November</option>
                                                        <option>December</option>
                                                    </select>
                                                    <i class="fa fa-angle-down"></i>
                                                </div>
                                            </div><!-- end columns -->
                                            
                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                <div class="row">
    
                                                    <div class="col-xs-12 col-sm-6 col-md-6">
                                                        <div class="form-group right-icon">
                                                            <label>Adults</label>
                                                            <select class="form-control">
                                                                <option selected>01</option>
                                                                <option>02</option>
                                                                <option>03</option>
                                                                <option>04</option>
                                                            </select>
                                                            <i class="fa fa-angle-down"></i>
                                                        </div>
                                                    </div><!-- end columns -->
                                                    
                                                    <div class="col-xs-12 col-sm-6 col-md-6">
                                                        <div class="form-group right-icon">
                                                            <label>Kids</label>
                                                            <select class="form-control">
                                                                <option selected>01</option>
                                                                <option>02</option>
                                                                <option>03</option>
                                                                <option>04</option>
                                                            </select>
                                                            <i class="fa fa-angle-down"></i>
                                                        </div>
                                                    </div><!-- end columns -->
                                                    
                                                </div><!-- end row -->
                                            </div><!-- end columns -->
                                            
                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 search-btn">
                                                <button class="btn btn-orange">Search</button>
                                            </div><!-- end columns -->
                                            
                                        </div><!-- end row -->
                                    </form>
                                </div><!-- end tours -->
                                
                                <div id="cruise" class="tab-pane">
                                    <form>
                                        <div class="row">

                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                <div class="row">
                                                
                                                    <div class="col-xs-12 col-sm-6 col-md-6">
                                                        <div class="form-group left-icon">
                                                            <label>From</label>
                                                            <input type="text" class="form-control" placeholder="City, Country" >
                                                            <i class="fa fa-map-marker"></i>
                                                        </div>
                                                    </div><!-- end columns -->
                                                    
                                                    <div class="col-xs-12 col-sm-6 col-md-6">
                                                        <div class="form-group left-icon">
                                                            <label>To</label>
                                                            <input type="text" class="form-control" placeholder="City, Country" >
                                                            <i class="fa fa-map-marker"></i>
                                                        </div>
                                                    </div><!-- end columns -->
        
                                                </div><!-- end row -->								
                                            </div><!-- end columns -->
                                            
                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                <div class="row">
                                                
                                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                                        <div class="form-group left-icon">
                                                            <label>Check In</label>
                                                            <input type="text" class="form-control dpd1" placeholder="mm/dd/yy" >
                                                            <i class="fa fa-calendar"></i>
                                                        </div>
                                                    </div><!-- end columns -->
                                                    
                                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                                        <div class="form-group left-icon">
                                                            <label>Check Out</label>
                                                            <input type="text" class="form-control dpd2" placeholder="mm/dd/yy" >
                                                            <i class="fa fa-calendar"></i>
                                                        </div>
                                                    </div><!-- end columns -->
        
                                                </div><!-- end row -->								
                                            </div><!-- end columns -->
                                            
                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                <div class="form-group right-icon">
                                                    <label>Adults</label>
                                                    <select class="form-control">
                                                        <option selected>01</option>
                                                        <option>02</option>
                                                        <option>03</option>
                                                        <option>04</option>
                                                    </select>
                                                    <i class="fa fa-angle-down"></i>
                                                </div>
                                            </div><!-- end columns -->
                                            
                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 search-btn">
                                                <button class="btn btn-orange">Search</button>
                                            </div><!-- end columns -->
                                            
                                        </div><!-- end row -->
                                    </form>
                                </div><!-- end cruises -->

                                <div id="cars" class="tab-pane in active">
                                    <form>					
                                        <div class="row">
                                        
                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                <div class="row">
                                                
                                                    <div class="col-sm-6 col-md-6">
                                                        <div class="form-group left-icon">
                                                            <label>Country</label>
                                                            <input type="text" class="form-control" placeholder="Country" />
                                                            <i class="fa fa-globe"></i>
                                                        </div>
                                                    </div><!-- end columns -->
                                                    
                                                    <div class="col-sm-6 col-md-6">
                                                        <div class="form-group left-icon">
                                                            <label>City</label>
                                                            <input type="text" class="form-control" placeholder="City" />
                                                            <i class="fa fa-map-marker"></i>
                                                        </div>
                                                    </div><!-- end columns -->
                                                    
                                                    <div class="col-sm-12 col-md-12">
                                                        <div class="form-group left-icon">
                                                            <label>Your Location</label>
                                                            <input type="text" class="form-control" placeholder="Location" />
                                                            <i class="fa fa-street-view"></i>
                                                        </div>
                                                    </div><!-- end columns -->
                                                    
                                                </div><!-- end row -->
                                            </div><!-- end columns -->
                                            
                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                <div class="row">
                                                
                                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                                        <div class="form-group left-icon">
                                                            <label>Check In</label>
                                                            <input type="text" class="form-control dpd1" placeholder="mm/dd/yy" >
                                                            <i class="fa fa-calendar"></i>
                                                        </div>
                                                    </div><!-- end columns -->
                                                    
                                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                                        <div class="form-group left-icon">
                                                            <label>Check Out</label>
                                                            <input type="text" class="form-control dpd2" placeholder="mm/dd/yy" >
                                                            <i class="fa fa-calendar"></i>
                                                        </div>
                                                    </div><!-- end columns -->
                                                    
                                                </div><!-- end row -->
                                            </div><!-- end columns -->
    
                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-2 search-btn">
                                                <button class="btn btn-orange">Search</button>
                                            </div><!-- end columns -->
                                            
                                        </div><!-- end row -->					
                                    </form>
                                </div><!-- end cars -->
                                
                                
                            </div><!-- end tab-content -->

                        </div><!-- end columns -->
       
                    </div><!-- end row -->
                </div><!-- end container -->
            </div><!-- end search-tabs -->
            
        </section><!-- end flexslider-container -->
		
        
        <!--================= CAR OFFERS =============-->
        <section id="car-offers" class="section-padding"> 
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">         	
                        <div class="page-heading">
                        	<h2>Car Offers</h2>
                            <hr class="heading-line" />
                        </div><!-- end page-heading -->
                        
                        <div class="owl-carousel owl-theme owl-custom-arrow" id="owl-car-offers">
                        
                        	<div class="item">
                        		<div class="main-block car-offer-block">
                            		<div class="main-img car-offer-img">
                                    	<a href="car-detail-right-sidebar.html">
                                    		<img src="<?=INCLUDE_ASSETS?>images/car-1.jpg" class="img-responsive" alt="car-img" />
                                        </a>
                                    </div><!-- end car-offer-img -->
                                    
                                    <div class="car-offer-info">
                                        <ul class="list-unstyled">
                                            <li><a href="car-detail-right-sidebar.html"><h4>Audi</h4></a><span class="car-offer-price">$68.00<span  class="limit"><span class="divider">|</span>Per Day</span></span></li>
                                        </ul>
                                    </div><!-- end car-offer-info -->
                                </div><!-- end car-offer-block -->
                            </div><!-- end item -->
                            
                            <div class="item">
                        		<div class="main-block car-offer-block">
                            		<div class="main-img car-offer-img">
                                    	<a href="car-detail-right-sidebar.html">
                                    		<img src="<?=INCLUDE_ASSETS?>images/car-2.jpg" class="img-responsive" alt="car-img" />
                                        </a>
                                    </div><!-- end car-offer-img -->
                                    
                                    <div class="car-offer-info">
                                        <ul class="list-unstyled">
                                            <li><a href="car-detail-right-sidebar.html"><h4>Range Rover</h4></a><span class="car-offer-price">$95.00<span  class="limit"><span class="divider">|</span>Per Day</span></span></li>
                                        </ul>
                                    </div><!-- end car-offer-info -->
                                </div><!-- end car-offer-block -->
                            </div><!-- end item -->
                            
                            <div class="item">
                        		<div class="main-block car-offer-block">
                            		<div class="main-img car-offer-img">
                                    	<a href="car-detail-right-sidebar.html">
                                    		<img src="<?=INCLUDE_ASSETS?>images/car-3.jpg" class="img-responsive" alt="car-img" />
                                        </a>
                                    </div><!-- end car-offer-img -->
                                    
                                    <div class="car-offer-info">
                                        <ul class="list-unstyled">
                                            <li><a href="car-detail-right-sidebar.html"><h4>Mercedese</h4></a><span class="car-offer-price">$78.00<span  class="limit"><span class="divider">|</span>Per Day</span></span></li>
                                        </ul>
                                    </div><!-- end car-offer-info -->
                                </div><!-- end car-offer-block -->
                            </div><!-- end item -->
                            
                            <div class="item">
                        		<div class="main-block car-offer-block">
                            		<div class="main-img car-offer-img">
                                    	<a href="car-detail-right-sidebar.html">
                                    		<img src="<?=INCLUDE_ASSETS?>images/car-4.jpg" class="img-responsive" alt="car-img" />
                                        </a>
                                    </div><!-- end car-offer-img -->
                                    
                                    <div class="car-offer-info">
                                        <ul class="list-unstyled">
                                            <li><a href="car-detail-right-sidebar.html"><h4>Audi</h4></a><span class="car-offer-price">$68.00<span  class="limit"><span class="divider">|</span>Per Day</span></span></li>
                                        </ul>
                                    </div><!-- end car-offer-info -->
                                </div><!-- end car-offer-block -->
                            </div><!-- end item -->
                            
                        </div><!-- end owl-car-offers -->
                        
                        <div class="view-all text-center">
                        	<a href="car-grid-right-sidebar.html" class="btn btn-orange">View All</a>
                        </div><!-- end view-all -->
                    </div><!-- end columns -->
                </div><!-- end row -->
        	</div><!-- end container -->
        </section><!-- end car-offers -->
        
                        
        <!--========================= BEST FEATURES =======================-->
        <section id="best-features" class="banner-padding lightgrey-features">
        	<div class="container">
        		<div class="row">
        			<div class="col-sm-6 col-md-3">
                    	<div class="b-feature-block">
                    		<span><i class="fa fa-dollar"></i></span>
                        	<h3>Best Price Guarantee</h3>
                            <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis.</p>
                        </div><!-- end b-feature-block -->
                   </div><!-- end columns -->
                   
                   <div class="col-sm-6 col-md-3">
                    	<div class="b-feature-block">
                    		<span><i class="fa fa-lock"></i></span>
                        	<h3>Safe and Secure</h3>
                            <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis.</p>
                        </div><!-- end b-feature-block -->
                   </div><!-- end columns -->
                   
                   <div class="col-sm-6 col-md-3">
                    	<div class="b-feature-block">
                    		<span><i class="fa fa-thumbs-up"></i></span>
                        	<h3>Best Travel Agents</h3>
                            <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis.</p>
                        </div><!-- end b-feature-block -->
                   </div><!-- end columns -->
                   
                   <div class="col-sm-6 col-md-3">
                    	<div class="b-feature-block">
                    		<span><i class="fa fa-bars"></i></span>
                        	<h3>Travel Guidelines</h3>
                            <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis.</p>
                        </div><!-- end b-feature-block -->
                   </div><!-- end columns -->
                </div><!-- end row -->
        	</div><!-- end container -->
        </section><!-- end best-features -->
        
        
        <!--================ LUXURY CAR ==============-->
        <section id="luxury-car" class="section-padding"> 
            <div class="container">
                <div class="row">
                	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 no-pd-r luxury-img">
                        <img src="<?=INCLUDE_ASSETS?>images/luxury-car.jpg" class="img-responsive" alt="luxury-car" />
                    </div>
                    
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 no-pd-l luxury-text">
                    	<div class="luxury-car-text">
                            <h2>Luxurious Car</h2>
                            <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis. Est atqui timeam mnesarchum at, pro an eros perpetua ullamcorper Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri.</p>
                            <a href="car-detail-right-sidebar.html" class="btn btn-black">From $99/Day</a>
                            <a href="car-detail-right-sidebar.html" class="btn btn-o-border">View Details</a>
                        </div>
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end luxury-car -->
        
        
        <!--================== PACKAGES ================-->
        <section id="car-packages" class="section-padding"> 
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">         	
                        <div class="page-heading white-heading">
                        	<h2>Our Packages</h2>
                            <hr class="heading-line" />
                        </div><!-- end page-heading -->
                        
                        <div class="row" id="hotel-package-tables">
							
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-offset-1 col-lg-10 col-lg-offset-1"> 
                            
                            	<div class="row">
                                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 text-center no-pd-r">
                                        <div class="package hotel-package">        
                                            <div class="h-pkg-heading">
                                                <h2 class="h-pkg-title">Luxury Room</h2>
                                                <h2 class="h-pkg-price">$199<span>night</span></h2>
                                            </div><!-- end h-pkg-heading -->
                                            
                                            <div class="pkg-features">
                                                <ul class="list-unstyled text-center">
                                                    <li>Breakfast</li>
                                                    <li>Private Balcony</li>
                                                    <li>Sea View</li>
                                                    <li>Free Wifi</li>
                                                    <li>Bathroom</li>
                                                    <li>Water Heated pool</li>
                                                </ul>
                                            </div><!-- end features -->
                                            <button class="btn">Select Package</button>  
                                        </div><!-- end hotel-package -->
                                    </div><!-- end columns -->
                                    
                                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 text-center no-pd-r no-pd-l">
                                        <div class="package hotel-package best-package">        
                                            <div class="h-pkg-heading">
                                                <h2 class="h-pkg-title">Comfort Room</h2>
                                                <h2 class="h-pkg-price">$199<span>night</span></h2>
                                            </div><!-- end h-pkg-heading -->
                                            
                                            <div class="pkg-features">
                                                <ul class="list-unstyled text-center">
                                                    <li>Breakfast</li>
                                                    <li>Private Balcony</li>
                                                    <li>Sea View</li>
                                                    <li>Free Wifi</li>
                                                    <li>Bathroom</li>
                                                    <li>Water Heated pool</li>
                                                </ul>
                                            </div><!-- end features -->
                                            <button class="btn">Select Package</button> 
                                        </div><!-- end hotel-package -->
                                    </div><!-- end columns -->
                                    
                                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 text-center no-pd-l">
                                        <div class="package hotel-package">        
                                            <div class="h-pkg-heading">
                                                <h2 class="h-pkg-title">Deluxe Room</h2>
                                                <h2 class="h-pkg-price">$199<span>night</span></h2>
                                            </div><!-- end h-package-heading -->
                                            
                                            <div class="pkg-features">
                                                <ul class="list-unstyled text-center">
                                                    <li>Breakfast</li>
                                                    <li>Private Balcony</li>
                                                    <li>Sea View</li>
                                                    <li>Free Wifi</li>
                                                    <li>Bathroom</li>
                                                    <li>Water Heated pool</li>
                                                </ul>
                                            </div><!-- end features -->
                                            <button class="btn">Select Package</button> 
                                        </div><!-- end hotel-package -->
                                    </div><!-- end columns -->

                                </div><!-- end row -->
                        	</div><!-- end columns -->
                        </div><!-- end row -->
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end car-packages -->
        
        
        <!--===================== MESSAGE BANNER ===================-->
        <section id="message-banner" class="section-padding back-size"> 
            <div class="container">
                <div class="row">
                	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-10">
                        <h2>Lorem ipsum dolor sit amet aeque fabulas.</h2>	
                        <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis.</p>
                    </div>
                    
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-2 message-btn">
                        <a href="#" class="btn btn-white">Read More</a>
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end message-banner -->
        
        
        <!--=============== TESTIMONIALS-2 ===============-->
        <section id="testimonials-2" class="section-padding">
        	<div class="container">
        		<div class="row">
        			<div class="col-sm-12">
                    	<div class="page-heading">
                        	<h2>Testimonials</h2>
                            <hr class="heading-line" />
                        </div><!-- end page-heading -->

                        <div class="owl-carousel owl-theme" id="owl-testimonials">

                            <div class="item">
                                <div class="review-block">
                                    <img src="<?=INCLUDE_ASSETS?>images/reviewer-1.jpg" alt="reviewer-image" class="img-circle img-responsive">
                                    <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis. Est atqui timeam mnesarchum at, pro an eros perpetua ullamcorper Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri.</p>
                                    
                                    <small>Jhon Smith</small>
                                    <p class="position">Manager</p>
                                </div><!-- end review-block -->
                            </div><!-- end item -->
                            
                            
                            <div class="item">
                                <div class="review-block">
                                    <img src="<?=INCLUDE_ASSETS?>images/reviewer-2.jpg" alt="reviewer-image" class="img-circle img-responsive">
                                    <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis. Est atqui timeam mnesarchum at, pro an eros perpetua ullamcorper Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri.</p>
                                    
                                    <small>Jhon Smith</small>
                                    <p class="position">Manager</p>
                                </div><!-- end review-block -->
                            </div><!-- end item -->
                            
                            
                            <div class="item">
                                <div class="review-block">
                                    <img src="<?=INCLUDE_ASSETS?>images/reviewer-3.jpg" alt="reviewer-image" class="img-circle img-responsive">
                                    <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis. Est atqui timeam mnesarchum at, pro an eros perpetua ullamcorper Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri.</p>
                                    
                                    <small>Jhon Smith</small>
                                    <p class="position">Manager</p>
                                </div><!-- end review-block -->
                            </div><!-- end item -->
                            
                        </div>
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end testimonials -->
        
        
        <!--============= NEWSLETTER-2 ============-->
        <section id="newsletter-2" class="newsletter"> 
            <div class="container">
                <div class="row">
                	<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
                        <h2>Subscribe Our Newsletter</h2>	
                    </div>
                    
                    <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">
                        <form>
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="email" class="form-control input-lg" placeholder="Enter your email address" required/>
                                    <span class="input-group-btn"><button class="btn btn-lg"><i class="fa fa-envelope"></i></button></span>
                                </div>
                            </div>
                        </form>
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end newsletter-2 -->
        
        
        <!--======================= FOOTER =======================-->
        <section id="footer" class="ftr-heading-w ftr-heading-mgn-2">
        
            <div id="footer-top" class="banner-padding ftr-top-grey ftr-text-grey">
                <div class="container">
                    <div class="row">

                        <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 footer-widget ftr-about ftr-our-company">
                            <h3 class="footer-heading">OUR COMPANY</h3>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit.</p>
                            <ul class="social-links list-inline list-unstyled">
                            	<li><a href="#"><span><i class="fa fa-facebook"></i></span></a></li>
                            	<li><a href="#"><span><i class="fa fa-twitter"></i></span></a></li>
                                <li><a href="#"><span><i class="fa fa-google-plus"></i></span></a></li>
                                <li><a href="#"><span><i class="fa fa-pinterest-p"></i></span></a></li>
                                <li><a href="#"><span><i class="fa fa-instagram"></i></span></a></li>
                                <li><a href="#"><span><i class="fa fa-linkedin"></i></span></a></li>
                                <li><a href="#"><span><i class="fa fa-youtube-play"></i></span></a></li>
                            </ul>
                        </div><!-- end columns -->
                        
                        <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 footer-widget ftr-map">
                            <div class="map">
                                <iframe src=		"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6509729.487836256!2d-123.77686152799836!3d37.1864783963941!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fb9fe5f285e3d%3A0x8b5109a227086f55!2sCalifornia!5e0!3m2!1sen!2s!4v1490695907554" allowfullscreen></iframe>
                            </div>
                        </div><!-- end columns -->
                        
                    </div><!-- end row -->
                </div><!-- end container -->
            </div><!-- end footer-top -->

            <div id="footer-bottom" class="ftr-bot-black">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" id="copyright">
                            <p>© 2017 <a href="#">StarTravel</a>. All rights reserved.</p>
                        </div><!-- end columns -->
                        
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" id="terms">
                            <ul class="list-unstyled list-inline">
                            	<li><a href="#">Terms & Condition</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                            </ul>
                        </div><!-- end columns -->
                    </div><!-- end row -->
                </div><!-- end container -->
            </div><!-- end footer-bottom -->
            
        </section><!-- end footer -->
        
        
        <!-- Page Scripts Starts -->
        <script src="<?=INCLUDE_ASSETS?>js/jquery.min.js"></script>
        <script src="<?=INCLUDE_ASSETS?>js/bootstrap.min.js"></script>
        <script src="<?=INCLUDE_ASSETS?>js/jquery.flexslider.js"></script>
        <script src="<?=INCLUDE_ASSETS?>js/bootstrap-datepicker.js"></script>
        <script src="<?=INCLUDE_ASSETS?>js/owl.carousel.min.js"></script>
        <script src="<?=INCLUDE_ASSETS?>js/custom-navigation.js"></script>
        <script src="<?=INCLUDE_ASSETS?>js/custom-flex.js"></script>
        <script src="<?=INCLUDE_ASSETS?>js/custom-owl.js"></script>
        <script src="<?=INCLUDE_ASSETS?>js/custom-date-picker.js"></script>
        <!-- Page Scripts Ends -->
        
    </body>
</html>