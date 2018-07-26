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
<div id="top-bar" class="tb-text-white">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <div id="info">
                    <ul class="list-unstyled list-inline">
                        <li><span><i class="fa fa-map-marker"></i></span>29 , Bikaner, Rajasthan, India</li>
                        <li><span><i class="fa fa-phone"></i></span>+91 123 4567</li>
                    </ul>
                </div><!-- end info -->
            </div><!-- end columns -->

            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <div id="links">
                    <ul class="list-unstyled list-inline">
                        <li><a href="<?=base_url()?>login"><span><i class="fa fa-lock"></i></span>Login</a></li>
                        <li><a href="<?=base_url()?>register"><span><i class="fa fa-plus"></i></span>Sign Up</a></li>
<!--                        <li>-->
<!--                            <form>-->
<!--                                <ul class="list-inline">-->
<!--                                    <li>-->
<!--                                        <div class="form-group currency">-->
<!--                                            <span><i class="fa fa-angle-down"></i></span>-->
<!--                                            <select class="form-control">-->
<!--                                                <option value="">$</option>-->
<!--                                                <option value="">£</option>-->
<!--                                            </select>-->
<!--                                        </div><!-- end form-group -->-->
<!--                                    </li>-->
<!---->
<!--                                    <li>-->
<!--                                        <div class="form-group language">-->
<!--                                            <span><i class="fa fa-angle-down"></i></span>-->
<!--                                            <select class="form-control">-->
<!--                                                <option value="">EN</option>-->
<!--                                                <option value="">UR</option>-->
<!--                                                <option value="">FR</option>-->
<!--                                                <option value="">IT</option>-->
<!--                                            </select>-->
<!--                                        </div><!-- end form-group -->-->
<!--                                    </li>-->
<!--                                </ul>-->
<!--                            </form>-->
<!--                        </li>-->
                    </ul>
                </div><!-- end links -->
            </div><!-- end columns -->
        </div><!-- end row -->
    </div><!-- end container -->
</div><!-- end top-bar -->

<div class="sidenav-content">
    <div id="mySidenav" class="sidenav" >
        <h2 id="web-name"><span><i class="fa fa-plane"></i></span>Bharat Tourism</h2>

        <div id="main-menu">
            <div class="closebtn">
                <button class="btn btn-default" id="closebtn">&times;</button>
            </div><!-- end close-btn -->

            <div class="list-group panel">

                <a href="<?=base_url()?>home-links" class="list-group-item" data-toggle="collapse" data-parent="#main-menu"><span><i class="fa fa-home link-icon"></i></span>Home<span><i class="fa fa-chevron-down arrow"></i></span></a>
                <div class="collapse sub-menu" id="home-links">
                    <a href="<?=base_url()?>index.html" class="list-group-item">Main Homepage</a>
                    <a href="<?=base_url()?>flight-homepage.html" class="list-group-item">Flight Homepage</a>
                    <a href="<?=base_url()?>hotel-homepage.html" class="list-group-item">Hotel Homepage</a>
                    <a href="<?=base_url()?>tour-homepage.html" class="list-group-item">Tour Homepage</a>
                    <a href="<?=base_url()?>cruise-homepage.html" class="list-group-item">Cruise Homepage</a>
                    <a href="<?=base_url()?>car-homepage.html" class="list-group-item">Car Homepage</a>
                    <a href="<?=base_url()?>landing-page.html" class="list-group-item">Landing Page</a>
                </div><!-- end sub-menu -->

                <a href="<?=base_url()?>flights-links" class="list-group-item" data-toggle="collapse" data-parent="#main-menu"><span><i class="fa fa-plane link-icon"></i></span>Flights<span><i class="fa fa-chevron-down arrow"></i></span></a>
                <div class="collapse sub-menu" id="flights-links">
                    <a href="<?=base_url()?>flight-homepage.html" class="list-group-item">Flight Homepage</a>
                    <a href="<?=base_url()?>flight-listing-left-sidebar.html" class="list-group-item">List View Left Sidebar</a>
                    <a href="<?=base_url()?>flight-listing-right-sidebar.html" class="list-group-item">List View Right Sidebar</a>
                    <a href="<?=base_url()?>flight-grid-left-sidebar.html" class="list-group-item">Grid View Left Sidebar</a>
                    <a href="<?=base_url()?>flight-grid-right-sidebar.html" class="list-group-item">Grid View Right Sidebar</a>
                    <a href="<?=base_url()?>flight-detail-left-sidebar.html" class="list-group-item">Detail Left Sidebar</a>
                    <a href="<?=base_url()?>flight-detail-right-sidebar.html" class="list-group-item">Detail Right Sidebar</a>
                </div><!-- end sub-menu -->

                <a href="<?=base_url()?>hotels-links" class="list-group-item" data-toggle="collapse" data-parent="#main-menu"><span><i class="fa fa-building link-icon"></i></span>Hotels<span><i class="fa fa-chevron-down arrow"></i></span></a>
                <div class="collapse sub-menu" id="hotels-links">
                    <a href="<?=base_url()?>hotel-homepage.html" class="list-group-item">Hotel Homepage</a>
                    <a href="<?=base_url()?>hotel-listing-left-sidebar.html" class="list-group-item">List View Left Sidebar</a>
                    <a href="<?=base_url()?>hotel-listing-right-sidebar.html" class="list-group-item">List View Right Sidebar</a>
                    <a href="<?=base_url()?>hotel-grid-left-sidebar.html" class="list-group-item">Grid View Left Sidebar</a>
                    <a href="<?=base_url()?>hotel-grid-right-sidebar.html" class="list-group-item">Grid View Right Sidebar</a>
                    <a href="<?=base_url()?>hotel-detail-left-sidebar.html" class="list-group-item">Detail Left Sidebar</a>
                    <a href="<?=base_url()?>hotel-detail-right-sidebar.html" class="list-group-item">Detail Right Sidebar</a>
                </div><!-- end sub-menu -->

                <a href="<?=base_url()?>tours-links" class="list-group-item" data-toggle="collapse" data-parent="#main-menu"><span><i class="fa fa-globe link-icon"></i></span>Tours<span><i class="fa fa-chevron-down arrow"></i></span></a>
                <div class="collapse sub-menu" id="tours-links">
                    <a href="<?=base_url()?>tour-homepage.html" class="list-group-item">Tour Homepage</a>
                    <a href="<?=base_url()?>tour-listing-left-sidebar.html" class="list-group-item">List View Left Sidebar</a>
                    <a href="<?=base_url()?>tour-listing-right-sidebar.html" class="list-group-item">List View Right Sidebar</a>
                    <a href="<?=base_url()?>tour-grid-left-sidebar.html" class="list-group-item">Grid View Left Sidebar</a>
                    <a href="<?=base_url()?>tour-grid-right-sidebar.html" class="list-group-item">Grid View Right Sidebar</a>
                    <a href="<?=base_url()?>tour-detail-left-sidebar.html" class="list-group-item">Detail Left Sidebar</a>
                    <a href="<?=base_url()?>tour-detail-right-sidebar.html" class="list-group-item">Detail Right Sidebar</a>
                </div><!-- end sub-menu -->

                <a href="<?=base_url()?>cruise-links" class="list-group-item" data-toggle="collapse" data-parent="#main-menu"><span><i class="fa fa-ship link-icon"></i></span>Cruise<span><i class="fa fa-chevron-down arrow"></i></span></a>
                <div class="collapse sub-menu" id="cruise-links">
                    <a href="<?=base_url()?>cruise-homepage.html" class="list-group-item">Cruise Homepage</a>
                    <a href="<?=base_url()?>cruise-listing-left-sidebar.html" class="list-group-item">List View Left Sidebar</a>
                    <a href="<?=base_url()?>cruise-listing-right-sidebar.html" class="list-group-item">List View Right Sidebar</a>
                    <a href="<?=base_url()?>cruise-grid-left-sidebar.html" class="list-group-item">Grid View Left Sidebar</a>
                    <a href="<?=base_url()?>cruise-grid-right-sidebar.html" class="list-group-item">Grid View Right Sidebar</a>
                    <a href="<?=base_url()?>cruise-detail-left-sidebar.html" class="list-group-item">Detail Left Sidebar</a>
                    <a href="<?=base_url()?>cruise-detail-right-sidebar.html" class="list-group-item">Detail Right Sidebar</a>
                </div><!-- end sub-menu -->

                <a href="<?=base_url()?>cars-links" class="list-group-item" data-toggle="collapse" data-parent="#main-menu"><span><i class="fa fa-car link-icon"></i></span>Cars<span><i class="fa fa-chevron-down arrow"></i></span></a>
                <div class="collapse sub-menu" id="cars-links">
                    <a href="<?=base_url()?>car-homepage.html" class="list-group-item">Car Homepage</a>
                    <a href="<?=base_url()?>car-listing-left-sidebar.html" class="list-group-item">List View Left Sidebar</a>
                    <a href="<?=base_url()?>car-listing-right-sidebar.html" class="list-group-item">List View Right Sidebar</a>
                    <a href="<?=base_url()?>car-grid-left-sidebar.html" class="list-group-item">Grid View Left Sidebar</a>
                    <a href="<?=base_url()?>car-grid-right-sidebar.html" class="list-group-item">Grid View Right Sidebar</a>
                    <a href="<?=base_url()?>car-detail-left-sidebar.html" class="list-group-item">Detail Left Sidebar</a>
                    <a href="<?=base_url()?>car-detail-right-sidebar.html" class="list-group-item">Detail Right Sidebar</a>
                </div><!-- end sub-menu -->

                <a href="<?=base_url()?>pages-links" class="list-group-item active" data-toggle="collapse" data-parent="#main-menu"><span><i class="fa fa-clone link-icon"></i></span>Pages<span><i class="fa fa-chevron-down arrow"></i></span></a>
                <div class="collapse sub-menu" id="pages-links">
                    <div class="list-group-heading list-group-item">Standard <span>Pages</span></div>
                    <a href="<?=base_url()?>about-us" class="list-group-item active">About Us</a>
                    <a href="<?=base_url()?>contact-us"  class="list-group-item">Contact Us</a>
                    <a href="<?=base_url()?>blog-listing-left-sidebar.html"  class="list-group-item">Blog Listing Left Sidebar</a>
                    <a href="<?=base_url()?>blog-listing-right-sidebar.html"  class="list-group-item">Blog Listing Right Sidebar</a>
                    <a href="<?=base_url()?>blog-detail-left-sidebar.html"  class="list-group-item">Blog Detail Left Sidebar</a>
                    <a href="<?=base_url()?>blog-detail-right-sidebar.html"  class="list-group-item">Blog Detail Right Sidebar</a>
                    <div class="list-group-heading list-group-item">User <span>Dashboard</span></div>
                    <a href="<?=base_url()?>dashboard.html" class="list-group-item">Dashboard</a>
                    <a href="<?=base_url()?>user-profile.html" class="list-group-item">User Profile</a>
                    <a href="<?=base_url()?>booking.html" class="list-group-item">Booking</a>
                    <a href="<?=base_url()?>wishlist.html" class="list-group-item">Wishlist</a>
                    <a href="<?=base_url()?>cards.html" class="list-group-item">Cards</a>
                    <div class="list-group-heading list-group-item">Special <span>Pages</span></div>
                    <a href="<?=base_url()?>login" class="list-group-item">Login</a>
                    <a href="<?=base_url()?>register" class="list-group-item">Registration</a>
                    <a href="<?=base_url()?>forgot-password" class="list-group-item">Forgot Password</a>
                    <a href="<?=base_url()?>error-page" class="list-group-item">404 Page</a>
                    <a href="<?=base_url()?>coming-soon" class="list-group-item">Coming Soon</a>
                    <div class="list-group-heading list-group-item">Extra <span>Pages</span></div>
                    <a href="<?=base_url()?>before-you-fly" class="list-group-item">Before Fly</a>
                    <a href="<?=base_url()?>travel-insurance" class="list-group-item">Travel Insurance</a>
                    <a href="<?=base_url()?>holidays" class="list-group-item">Holidays</a>
                    <a href="<?=base_url()?>thank-you" class="list-group-item">Thank You</a>
                </div><!-- end sub-menu -->
            </div><!-- end list-group -->
        </div><!-- end main-menu -->
    </div><!-- end mySidenav -->
</div><!-- end sidenav-content -->