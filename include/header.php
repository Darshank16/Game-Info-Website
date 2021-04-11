    <header class="header-area wow fadeInDown" data-wow-delay="500ms">
        <!-- Top Header Area -->
        <div class="top-header-area">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12 d-flex align-items-center justify-content-between">
                        <!-- Logo Area -->
                         <div class="logo" id="logo1">
                            <a href="homepage.php"><img src="logo1.png" alt=""></a>
                        </div>
 
                        <!-- Search & Login Area -->
                        <div class="search-login-area d-flex align-items-center">
                            <!-- Top Search Area -->
                            <div class="top-search-area">
                                <form action="#" method="post" id="searchPage">
                                    <input type="search" name="top-search" id="topSearch" placeholder="Search">

                                </form>
                                <div id="list">
                                        <ul>
                                            
                                        </ul>
                                    </div>
                            </div>
                            <?php if (!isset($_SESSION["loggedin"])) { ?>                                
                            <!-- Login Area -->
                            <div class="login-area">
                                <a href="login.php"><span>Login / Register</span> <i class="fa fa-lock" aria-hidden="true"></i></a>

                            </div>
                            <?php }else{ ?>
                            <div class="login-area">
                                <a href="logout.php"><span>Logout</span> <i class="fa fa-lock" aria-hidden="true"></i></a>
                                
                            </div>
                        <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navbar Area -->
        <div class="egames-main-menu" id="sticker">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="egamesNav">

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li><a href="homepage.php">Home</a></li>
                                    <li><a href="games.php">Games</a></li>                                   
                                    <!-- <li><a href="#">Articles</a>
                                        <ul class="dropdown">
                                            <li><a href="post.html">Articles</a></li>
                                            <li><a href="single-post.html">Single Articles</a></li>
                                        </ul>
                                    </li>   -->                                 
                                    <li><a href="contactus.php">Contact</a></li>
                                    <li><a href="aboutus.php">About Us</a></li>
                                    <li><a href="#"><?php if (isset($_SESSION["loggedin"])) { echo "Hello ".$_SESSION["username"]; } ?>  </a></li>
                                </ul>
                            </div>
                            <!-- Nav End -->
                        </div>

                        <!-- Top Social Info -->
                        <div class="top-social-info">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Pinterest"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>                          
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>