<?php
session_start();
?>
<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <meta charset="utf-8" />
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="css/classy-nav.css" rel="stylesheet" />
    <title>GameTech</title>
    <link href="StyleSheet1.css" rel="stylesheet" />
</head>
<body>
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>

    <!--  Header Area Start  -->
    <?php require_once "include/header.php"; ?>
    <!--  Header Area End  -->

    <!--  Hero Area Start  -->
    <div class="hero-area">
        <!-- Hero Post Slides -->
        <div class="hero-post-slides owl-carousel">

            <!-- Single Slide -->
            <div class="single-slide bg-img bg-overlay" style="background-image: url(img/bg-img/img2.jpg);">
                <!-- Blog Content -->
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12 col-lg-9">
                            <div class="blog-content" data-animation="fadeInUp" data-delay="100ms">
                                <h2 data-animation="fadeInUp" data-delay="400ms">The Division</h2>
                                <p data-animation="fadeInUp" data-delay="700ms">Tom Clancy's The Division is an online-only action role-playing video game developed by Massive Entertainment and published in 2016 by Ubisoft, for Microsoft Windows, PlayStation 4 and Xbox One.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Slide -->
            <div class="single-slide bg-img bg-overlay" style="background-image: url(img/bg-img/2.jpg);">
                <!-- Blog Content -->
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12 col-lg-9">
                            <div class="blog-content" data-animation="fadeInUp" data-delay="100ms">
                                <h2 data-animation="fadeInUp" data-delay="400ms">God of war</h2>
                                <p data-animation="fadeInUp" data-delay="700ms">God of War is an action-adventure game developed by Santa Monica Studio and published by Sony Interactive Entertainment. Released on April 20, 2018, for the PlayStation 4, it is the eighth installment in the God of War series, the eighth chronologically, and the sequel to 2010's God of War III.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!--  Hero Area End -->

    <!--  Games Area Start  -->
   <div class="games-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <!-- Single Games Area -->
                <div class="col-12 col-md-4">
                    <div class="single-games-area text-center mb-100 wow fadeInUp" data-wow-delay="100ms">
                        <img src="img/bg-img/game1.jpg" alt="">
                        <!-- <a href="#" class="btn egames-btn mt-30">View Games</a> -->
                    </div>
                </div>

                <!-- Single Games Area -->
                <div class="col-12 col-md-4">
                    <div class="single-games-area text-center mb-100 wow fadeInUp" data-wow-delay="300ms">
                        <img src="img/bg-img/game2.jpg" alt="">
                        <!-- <a href="#" class="btn egames-btn mt-30">View Games</a> -->
                    </div>
                </div>

                <!-- Single Games Area -->
                <div class="col-12 col-md-4">
                    <div class="single-games-area text-center mb-100 wow fadeInUp" data-wow-delay="500ms">
                        <img src="img/bg-img/xbox1img.jpg" alt="">
                        <!-- <a href="#" class="btn egames-btn mt-30">View Games</a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  Games Area End  -->

    <!--  Monthly Picks Area Start  -->
    <section class="monthly-picks-area section-padding-100 bg-pattern">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="left-right-pattern"></div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Title -->
                    <h2 class="section-title mb-70 wow fadeInUp" data-wow-delay="100ms">This Month’s Pick</h2>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <ul class="nav nav-tabs wow fadeInUp" data-wow-delay="300ms" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="popular-tab" data-toggle="tab" href="#popular" role="tab" aria-controls="popular" aria-selected="true">Popular</a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link" id="latest-tab" data-toggle="tab" href="#latest" role="tab" aria-controls="latest" aria-selected="false">Latest</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="editor-tab" data-toggle="tab" href="#editor" role="tab" aria-controls="editor" aria-selected="false">Editor’s Pick</a>
                        </li> -->
                    </ul>
                </div>
            </div>
        </div>

        <div class="tab-content wow fadeInUp" data-wow-delay="500ms" id="myTabContent">
            <div class="tab-pane fade show active" id="popular" role="tabpanel" aria-labelledby="popular-tab">
                <!-- Popular Games Slideshow -->
                <div class="popular-games-slideshow owl-carousel">

                    <!-- Single Games -->
                    <div class="single-games-slide">
                        <img src="img/bg-img/gta5.jpg" alt="">
                        <div class="slide-text">
                            <a href="#" class="game-title">Grand Theft Auto V</a>
                            <div class="meta-data">
                                <a href="#">User: 9.1/10</a>
                                <a href="#">Action</a>
                            </div>
                        </div>
                    </div>

                    <!-- Single Games -->
                    <div class="single-games-slide">
                        <img src="img/bg-img/watchdogs2.jpg" alt="">
                        <div class="slide-text">
                            <a href="#" class="game-title">Watch Dogs 2</a>
                            <div class="meta-data">
                                <a href="#">User: 9.1/10</a>
                                <a href="#">Adventure</a>
                            </div>
                        </div>
                    </div>

                    <!-- Single Games -->
                    <div class="single-games-slide">
                        <img src="img/bg-img/52.jpg" alt="">
                        <div class="slide-text">
                            <a href="#" class="game-title">God of War</a>
                            <div class="meta-data">
                                <a href="#">User: 9.1/10</a>
                                <a href="#">Action</a>
                            </div>
                        </div>
                    </div>

                    <!-- Single Games -->
                    <div class="single-games-slide">
                        <img src="img/bg-img/53.jpg" alt="">
                        <div class="slide-text">
                            <a href="#" class="game-title">Bloodborne</a>
                            <div class="meta-data">
                                <a href="#">User: 9.1/10</a>
                                <a href="#">Adventure</a>
                            </div>
                        </div>
                    </div>

                    <!-- Single Games -->
                    <div class="single-games-slide">
                        <img src="img/bg-img/valhalla.jpg" alt="">
                        <div class="slide-text">
                            <a href="#" class="game-title">AC Valhalla</a>
                            <div class="meta-data">
                                <a href="#">User: 9.1/10</a>
                                <a href="#">Action</a>
                            </div>
                        </div>
                    </div>

                    <!-- Single Games -->
                    <div class="single-games-slide">
                        <img src="img/bg-img/52.jpg" alt="">
                        <div class="slide-text">
                            <a href="#" class="game-title">God of War</a>
                            <div class="meta-data">
                                <a href="#">User: 9.1/10</a>
                                <a href="#">Action</a>
                            </div>
                        </div>
                    </div>

                    <!-- Single Games -->
                    <div class="single-games-slide">
                        <img src="img/bg-img/53.jpg" alt="">
                        <div class="slide-text">
                            <a href="#" class="game-title">Bloodborne</a>
                            <div class="meta-data">
                                <a href="#">User: 9.1/10</a>
                                <a href="#">Adventure</a>
                            </div>
                        </div>
                    </div>

                    <!-- Single Games -->
                    <div class="single-games-slide">
                        <img src="img/bg-img/valhalla.jpg" alt="">
                        <div class="slide-text">
                            <a href="#" class="game-title">AC Valhalla</a>
                            <div class="meta-data">
                                <a href="#">User: 9.1/10</a>
                                <a href="#">Action</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="tab-pane fade" id="latest" role="tabpanel" aria-labelledby="latest-tab">
                <!-- Latest Games Slideshow -->
                <div class="latest-games-slideshow owl-carousel">

                    <!-- Single Games -->
                    <div class="single-games-slide">
                        <img src="img/bg-img/gta5.jpg" alt="">
                        <div class="slide-text">
                            <a href="#" class="game-title">Grand Theft Auto V</a>
                            <div class="meta-data">
                                <a href="#">User: 9.1/10</a>
                                <a href="#">Action</a>
                            </div>
                        </div>
                    </div>

                    <!-- Single Games -->
                    <div class="single-games-slide">
                        <img src="img/bg-img/watchdogs2.jpg" alt="">
                        <div class="slide-text">
                            <a href="#" class="game-title">Watch Dogs 2</a>
                            <div class="meta-data">
                                <a href="#">User: 9.1/10</a>
                                <a href="#">Adventure</a>
                            </div>
                        </div>
                    </div>

                    <!-- Single Games -->
                    <div class="single-games-slide">
                        <img src="img/bg-img/52.jpg" alt="">
                        <div class="slide-text">
                            <a href="#" class="game-title">God of War</a>
                            <div class="meta-data">
                                <a href="#">User: 9.1/10</a>
                                <a href="#">Action</a>
                            </div>
                        </div>
                    </div>

                    <!-- Single Games -->
                    <div class="single-games-slide">
                        <img src="img/bg-img/53.jpg" alt="">
                        <div class="slide-text">
                            <a href="#" class="game-title">Bloodborne</a>
                            <div class="meta-data">
                                <a href="#">User: 9.1/10</a>
                                <a href="#">Adventure</a>
                            </div>
                        </div>
                    </div>

                    <!-- Single Games -->
                    <div class="single-games-slide">
                        <img src="img/bg-img/valhalla.jpg" alt="">
                        <div class="slide-text">
                            <a href="#" class="game-title">AC Valhalla</a>
                            <div class="meta-data">
                                <a href="#">User: 9.1/10</a>
                                <a href="#">Action</a>
                            </div>
                        </div>
                    </div>

                    <!-- Single Games -->
                    <div class="single-games-slide">
                        <img src="img/bg-img/52.jpg" alt="">
                        <div class="slide-text">
                            <a href="#" class="game-title">God of War</a>
                            <div class="meta-data">
                                <a href="#">User: 9.1/10</a>
                                <a href="#">Action</a>
                            </div>
                        </div>
                    </div>

                    <!-- Single Games -->
                    <div class="single-games-slide">
                        <img src="img/bg-img/53.jpg" alt="">
                        <div class="slide-text">
                            <a href="#" class="game-title">Bloodborne</a>
                            <div class="meta-data">
                                <a href="#">User: 9.1/10</a>
                                <a href="#">Adventure</a>
                            </div>
                        </div>
                    </div>

                    <!-- Single Games -->
                    <div class="single-games-slide">
                        <img src="img/bg-img/valhalla.jpg" alt="">
                        <div class="slide-text">
                            <a href="#" class="game-title">AC Valhalla</a>
                            <div class="meta-data">
                                <a href="#">User: 9.1/10</a>
                                <a href="#">Action</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="tab-pane fade" id="editor" role="tabpanel" aria-labelledby="editor-tab">
                <!-- Editor Games Slideshow -->
                <div class="editor-games-slideshow owl-carousel">

                    <!-- Single Games -->
                    <div class="single-games-slide">
                        <img src="img/bg-img/gta5.jpg" alt="">
                        <div class="slide-text">
                            <a href="#" class="game-title">Grand Theft Auto V</a>
                            <div class="meta-data">
                                <a href="#">User: 9.1/10</a>
                                <a href="#">Action</a>
                            </div>
                        </div>
                    </div>

                    <!-- Single Games -->
                    <div class="single-games-slide">
                        <img src="img/bg-img/watchdogs2.jpg" alt="">
                        <div class="slide-text">
                            <a href="#" class="game-title">Watch Dogs 2</a>
                            <div class="meta-data">
                                <a href="#">User: 9.1/10</a>
                                <a href="#">Adventure</a>
                            </div>
                        </div>
                    </div>

                    <!-- Single Games -->
                    <div class="single-games-slide">
                        <img src="img/bg-img/52.jpg" alt="">
                        <div class="slide-text">
                            <a href="#" class="game-title">God of War</a>
                            <div class="meta-data">
                                <a href="#">User: 9.1/10</a>
                                <a href="#">Action</a>
                            </div>
                        </div>
                    </div>

                    <!-- Single Games -->
                    <div class="single-games-slide">
                        <img src="img/bg-img/53.jpg" alt="">
                        <div class="slide-text">
                            <a href="#" class="game-title">Bloodborne</a>
                            <div class="meta-data">
                                <a href="#">User: 9.1/10</a>
                                <a href="#">Adventure</a>
                            </div>
                        </div>
                    </div>

                    <!-- Single Games -->
                    <div class="single-games-slide">
                        <img src="img/bg-img/valhalla.jpg" alt="">
                        <div class="slide-text">
                            <a href="#" class="game-title">AC Valhalla</a>
                            <div class="meta-data">
                                <a href="#">User: 9.1/10</a>
                                <a href="#">Action</a>
                            </div>
                        </div>
                    </div>

                    <!-- Single Games -->
                    <div class="single-games-slide">
                        <img src="img/bg-img/52.jpg" alt="">
                        <div class="slide-text">
                            <a href="#" class="game-title">God of War</a>
                            <div class="meta-data">
                                <a href="#">User: 9.1/10</a>
                                <a href="#">Action</a>
                            </div>
                        </div>
                    </div>

                    <!-- Single Games -->
                    <div class="single-games-slide">
                        <img src="img/bg-img/53.jpg" alt="">
                        <div class="slide-text">
                            <a href="#" class="game-title">Bloodborne</a>
                            <div class="meta-data">
                                <a href="#">User: 9.1/10</a>
                                <a href="#">Adventure</a>
                            </div>
                        </div>
                    </div>

                    <!-- Single Games -->
                    <div class="single-games-slide">
                        <img src="img/bg-img/valhalla.jpg" alt="">
                        <div class="slide-text">
                            <a href="#" class="game-title">AC Valhalla</a>
                            <div class="meta-data">
                                <a href="#">User: 9.1/10</a>
                                <a href="#">Action</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--  Monthly Picks Area End -->

    <!--  Video Area Start  -->
    <div class="egames-video-area section-padding-100 bg-pattern2">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="egames-nav-btn">
                        <div class="nav flex-column" id="video-tab" role="tablist" aria-orientation="vertical">
                            <a class="nav-link active" id="video1" data-toggle="pill" href="#video-1" role="tab" aria-controls="video-1" aria-selected="true" >
                                <!-- Single Video Widget -->
                                <div class="single-video-widget d-flex wow fadeInUp" data-wow-delay="100ms">
                                    <div class="video-thumbnail">
                                        <img src="img/bg-img/14.jpg" alt="">
                                    </div>
                                    <div class="video-text">
                                        <p class="video-title mb-0">"I Am What The Gods Have Made Me!" - God Of War</p>
                                        <span> PS4 </span>
                                    </div>
                                    
                                </div>
                            </a>

                            <a class="nav-link" id="video2" data-toggle="pill" href="#video-2" role="tab" aria-controls="video-2" aria-selected="false">
                                <!-- Single Video Widget -->
                                <div class="single-video-widget d-flex wow fadeInUp" data-wow-delay="200ms">
                                    <div class="video-thumbnail">
                                        <img src="img/bg-img/blackops.jpg" alt="">
                                    </div>
                                    <div class="video-text">
                                        <p class="video-title mb-0">Call of Duty Black Ops 3</p>
                                        <span> PS4, XBox 360, XBox one, PC, PS3</span>
                                    </div>
                                   
                                </div>
                            </a>

                            <a class="nav-link" id="video3" data-toggle="pill" href="#video-3" role="tab" aria-controls="video-3" aria-selected="false">
                                <!-- Single Video Widget -->
                                <div class="single-video-widget d-flex wow fadeInUp" data-wow-delay="300ms">
                                    <div class="video-thumbnail">
                                        <img src="img/bg-img/fifa.jpg" alt="">
                                    </div>
                                    <div class="video-text">
                                        <p class="video-title mb-0">"For the Game. For the World."- FIFA 2020</p>
                                        <span> PS4 </span>
                                    </div>
                                    
                                </div>
                            </a>

                            <a class="nav-link" id="video4" data-toggle="pill" href="#video-4" role="tab" aria-controls="video-4" aria-selected="false">
                                <!-- Single Video Widget -->
                                <div class="single-video-widget d-flex wow fadeInUp" data-wow-delay="400ms">
                                    <div class="video-thumbnail">
                                        <img src="img/bg-img/witcher3-1.jpg" alt="">
                                    </div>
                                    <div class="video-text">
                                        <p class="video-title mb-0">"Don't Blame Yourself. No Witcher's Ever Died In His Bed."-Witcher 3-Wild hunt </p>
                                        <span> PS4, XBox one, PC</span>
                                    </div>
                                    
                                </div>
                            </a>

                            <a class="nav-link" id="video5" data-toggle="pill" href="#video-5" role="tab" aria-controls="video-5" aria-selected="false">
                                <!-- Single Video Widget -->
                                <div class="single-video-widget d-flex wow fadeInUp" data-wow-delay="500ms">
                                    <div class="video-thumbnail">
                                        <img src="img/bg-img/residentevil7.jpg" alt="">
                                    </div>
                                    <div class="video-text">
                                        <p class="video-title mb-0">"Fight Your Fears."-Resident Evil 7 Biohazard </p>
                                        <span> PS4, XBox one, PC</span>
                                    </div>
                                    
                                </div>
                            </a>

                            <a class="nav-link" id="video6" data-toggle="pill" href="#video-6" role="tab" aria-controls="video-6" aria-selected="false">
                                <!-- Single Video Widget -->
                                <div class="single-video-widget d-flex wow fadeInUp" data-wow-delay="600ms">
                                    <div class="video-thumbnail">
                                        <img src="img/bg-img/spiderman3.jpg" alt="">
                                    </div>
                                    <div class="video-text">
                                        <p class="video-title mb-0">"The greatest battle lies within."-Spider-Man 3</p>
                                        <span>Nintendo Wii, PS4, XBox 360</span>
                                    </div>
                                   
                                </div>
                            </a>

                            <a class="nav-link" id="video7" data-toggle="pill" href="#video-7" role="tab" aria-controls="video-7" aria-selected="false">
                                <!-- Single Video Widget -->
                                <div class="single-video-widget d-flex wow fadeInUp" data-wow-delay="700ms">
                                    <div class="video-thumbnail">
                                        <img src="img/bg-img/14.jpg" alt="">
                                    </div>
                                    <div class="video-text">
                                        <p class="video-title mb-0">"I Am What The Gods Have Made Me!" - God Of War</p>
                                        <span> PS4 </span>
                                    </div>
                                    
                                </div>
                            </a>

                            <a class="nav-link" id="video8" data-toggle="pill" href="#video-8" role="tab" aria-controls="video-8" aria-selected="false">
                                <!-- Single Video Widget -->
                                <div class="single-video-widget d-flex wow fadeInUp" data-wow-delay="800ms">
                                    <div class="video-thumbnail">
                                        <img src="img/bg-img/blackops.jpg" alt="">
                                    </div>
                                    <div class="video-text">
                                        <p class="video-title mb-0">Call of Duty Black Ops 3</p>
                                        <span>PS4, XBox 360, XBox one, PC, PS3</span>
                                    </div>
                                    
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-8">
                    <div class="tab-content" id="video-tabContent">
                        <div class="tab-pane fade show active" id="video-1" role="tabpanel" aria-labelledby="video1">
                            <div class="video-playground bg-img" style="background-image: url(img/bg-img/45.jpg);">
                                <!-- Play Button -->
                                <div class="play-btn">
                                    <a href="https://www.youtube.com/watch?v=K0u_kAWLJOA" class="play-button"><img src="img/core-img/play.png" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="video-2" role="tabpanel" aria-labelledby="video2">
                            <div class="video-playground bg-img" style="background-image: url(img/bg-img/cod.jpg);">
                                <!-- Play Button -->
                                <div class="play-btn">
                                    <a href="https://www.youtube.com/watch?v=qAUYNIDEJ6o" class="play-button"><img src="img/core-img/play.png" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="video-3" role="tabpanel" aria-labelledby="video3">
                            <div class="video-playground bg-img" style="background-image: url(img/bg-img/fifa20.jpg);">
                                <!-- Play Button -->
                                <div class="play-btn">
                                    <a href="https://www.youtube.com/watch?v=vgQNOIhRsV4" class="play-button"><img src="img/core-img/play.png" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="video-4" role="tabpanel" aria-labelledby="video4">
                            <div class="video-playground bg-img" style="background-image: url(img/bg-img/w3.jpg);">
                                <!-- Play Button -->
                                <div class="play-btn">
                                    <a href="https://www.youtube.com/watch?v=ehjJ614QfeM" class="play-button"><img src="img/core-img/play.png" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="video-5" role="tabpanel" aria-labelledby="video5">
                            <div class="video-playground bg-img" style="background-image: url(img/bg-img/re7.jpg);">
                                <!-- Play Button -->
                                <div class="play-btn">
                                    <a href="https://www.youtube.com/watch?v=W1OUs3HwIuo" class="play-button"><img src="img/core-img/play.png" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="video-6" role="tabpanel" aria-labelledby="video6">
                            <div class="video-playground bg-img" style="background-image: url(img/bg-img/sm3.jpg);">
                                <!-- Play Button -->
                                <div class="play-btn">
                                    <a href="https://www.youtube.com/watch?v=RplAnHZjN8s" class="play-button"><img src="img/core-img/play.png" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="video-7" role="tabpanel" aria-labelledby="video7">
                            <div class="video-playground bg-img" style="background-image: url(img/bg-img/45.jpg);">
                                <!-- Play Button -->
                                <div class="play-btn">
                                    <a href="https://www.youtube.com/watch?v=K0u_kAWLJOA" class="play-button"><img src="img/core-img/play.png" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="video-8" role="tabpanel" aria-labelledby="video8">
                            <div class="video-playground bg-img" style="background-image: url(img/bg-img/cod.jpg);">
                                <!-- Play Button -->
                                <div class="play-btn">
                                    <a href="https://www.youtube.com/watch?v=qAUYNIDEJ6o" class="play-button"><img src="img/core-img/play.png" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  Video Area End  -->

    <!--  Articles Area Start  -->
    <section class="latest-articles-area section-padding-100-0 bg-img bg-pattern bg-fixed" style="background-image: url(img/bg-img/5.jpg);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8">
                    <div class="mb-100">
                        <!-- Title -->
                        <h2 class="section-title mb-70 wow fadeInUp" data-wow-delay="100ms">Latest Articles</h2>

                        <!-- *** Single Articles Area *** -->
                        <div class="single-articles-area style-2 d-flex flex-wrap mb-30 wow fadeInUp" data-wow-delay="300ms">
                            <div class="article-thumbnail">
                                <img src="img/bg-img/rtx.png" alt="">
                            </div>
                            <div class="article-content">
                                <a href="single-post.html" class="post-title">NVIDIA’s New RTX 3000 Series – Faster, Bigger, Better And More Power</a>
                                <div class="post-meta">
                                    <a href="#" class="post-date">September 2, 2020</a>
                                    <!-- <a href="#" class="post-comments">2 Comments</a> -->
                                </div>
                                <p>Gamers have long awaited the arrival of NVIDIA’s RTX 3000 series. </p>
                            </div>
                        </div>

                        <!-- *** Single Articles Area *** -->
                        <div class="single-articles-area style-2 d-flex flex-wrap mb-30 wow fadeInUp" data-wow-delay="500ms">
                            <div class="article-thumbnail">
                                <img src="img/bg-img/freegame.jpg" alt="">
                            </div>
                            <div class="article-content">
                                <a href="single-post.html" class="post-title">Ubisoft Offers Tom Clancy's The Division for Free Until Sept. 7</a>
                                <div class="post-meta">
                                    <a href="#" class="post-date">September 2,2020</a>
                                    <!-- <a href="#" class="post-comments">2 Comments</a> -->
                                </div>
                                <p>Announced via Twitter, Ubisoft is offering Tom Clancy's The Division for free via its UPlay digital distribution service, which is also free to download and use.</p>
                            </div>
                        </div>

                        <!-- *** Single Articles Area *** -->
                        <div class="single-articles-area style-2 d-flex flex-wrap mb-30 wow fadeInUp" data-wow-delay="700ms">
                            <div class="article-thumbnail">
                                <img src="img/bg-img/codremaster.jpg" alt="">
                            </div>
                            <div class="article-content">
                                <a href="single-post.html" class="post-title">New Data-mines confirms the best 'call of duty' campaign is getting a remaster.</a>
                                <div class="post-meta">
                                    <a href="#" class="post-date">September 3, 2020</a>
                                    <!-- <a href="#" class="post-comments">2 Comments</a> -->
                                </div>
                                <p>Call of Duty: Modern Warfare 2 Campaign Remastered has seemingly been confirmed by Activision in a new leak.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4">
                    <!-- Title -->
                    <h2 class="section-title mb-70 wow fadeInUp" data-wow-delay="100ms">This Month’s deal</h2>

                    <!-- Single Widget Area -->
                    <div class="single-widget-area add-widget wow fadeInUp" data-wow-delay="300ms">
                        <a href="#"><img src="img/bg-img/xboxad.jpg" alt=""></a>
                        <!-- Side Img -->
                       <!-- <img src="img/bg-img/side-img.png" class="side-img" alt=""> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Articles Area End  -->

    <!--  Footer Area Start  -->
   <?php require_once "include/footer.php"; ?>
    <!--  Footer Area End  -->

    <!-- All Javascript Script  -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    
    <script src="js/main.js"></script>

    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
</body>
</html>
