<?php 
session_start();
?>
<?php
require_once 'connection.php';
$id=$_GET["id"];
$sql = "SELECT * FROM gameinfo WHERE gameid='$id'";
$result = $conn->query($sql);
$exist=0;
if ($result->num_rows > 0) {
    $exist=1;
  $row = $result->fetch_assoc();
}
$sql = "SELECT * FROM gameimage WHERE gameid='$id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  $outp = $result->fetch_assoc();
}
?>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <meta charset="utf-8" />
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="css/classy-nav.css" rel="stylesheet" />
    <title>GamePage</title>
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
    <!--  top body Area Start  -->
    <div class="breadcrumb-area bg-img bg-overlay" style="background-image: url(img/bg-img/hero-8.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <!-- Breadcrumb Text -->
                <div class="col-12">
                    <div class="breadcrumb-text">
                        <h2>Game Information</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  top body Area End  -->

     <!--  Single Game Review Area Start  -->
    <section class="single-game-review-area section-padding-100">
        <div class="container">

            <?php if($exist){ ?>
            <div class="row">
                <div class="col-12">
                    <div class="single-game-img-slides">
                        <div id="gameSlides" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img  src="img/game/<?php echo $outp["img1"]; ?>" alt="">
                                </div>
                                <div class="carousel-item">
                                    <img  src="img/game/<?php echo $outp["img2"]; ?>" alt="">
                                </div>
                                <div class="carousel-item">
                                    <img  src="img/game/<?php echo $outp["img3"]; ?>" alt="">
                                </div>
                                <div class="carousel-item">
                                    <img  src="img/game/<?php echo $outp["img4"]; ?>" alt="">
                                </div>
                                <div class="carousel-item">
                                    <img  src="img/game/<?php echo $outp["img5"]; ?>" alt="">
                                </div>
                                <div class="carousel-item">
                                    <img  src="img/game/<?php echo $outp["img6"]; ?>" alt="">
                                </div>
                            </div>
                            <ol class="carousel-indicators">
                                <li data-target="#gameSlides" data-slide-to="0" class="active" style="background-image: url(img/game/<?php echo $outp["img1"]; ?>);"></li>
                                <li data-target="#gameSlides" data-slide-to="1" style="background-image: url(img/game/<?php echo $outp["img2"]; ?>);"></li>
                                <li data-target="#gameSlides" data-slide-to="2" style="background-image: url(img/game/<?php echo $outp["img3"]; ?>);"></li>
                                <li data-target="#gameSlides" data-slide-to="3" style="background-image: url(img/game/<?php echo $outp["img4"]; ?>);"></li>
                                <li data-target="#gameSlides" data-slide-to="4" style="background-image: url(img/game/<?php echo $outp["img5"]; ?>);"></li>
                                <li data-target="#gameSlides" data-slide-to="5" style="background-image: url(img/game/<?php echo $outp["img6"]; ?>);"></li>
                            </ol>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="game-description mb-45">
                                <h3><?php echo $row["gtitle"]; ?></h3>

                                <p><?php echo $row["gintro"]; ?></p>
                            </div>
                            <div class="timelaine-wrapper mb-30">
                                <div class="single-timeline pb-30">
                                    <h4>Story behind the game</h4>
                                    <p><?php echo $row["gstory"]; ?></p>
                                </div>                              
                                <div class="single-timeline pb-30">
                                    <h4>First Release</h4>
                                    <p><?php echo $row["grelease"]; ?></p>
                                </div>
                                <div class="single-timeline pb-30">
                                    <h4>Compatible for</h4>
                                    <p><?php echo $row["gcompatible"]; ?></p> 
                                    
                                </div>
                                <div class="single-timeline pb-30">
                                    <h4>PC Requirement (Minimum)</h4> 
                                    <p><?php echo $row["greq"]; ?></p>                                  
                                </div>
                                <div class="single-timeline pb-30">
                                    <h4>PRICE FOR PS4 And Xbox</h4>
                                    <p><?php echo $row["gprice"]; ?></p>                            
                                </div>
                                <div class="single-timeline pb-30">
                                    <h4>DOWNLOAD FOR PC</h4>                                   
                                    <p><a href="<?php echo $row["glink"]; ?>">CLICK HERE FOR DOWNLOAD</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<?php } ?>
            
        </div>
    </section>
    <!--  Single Game Review Area End  -->

    <!--  Footer Area Start  -->
    <?php require_once "include/footer.php"; ?>
    <!--  Footer Area End  -->

    <!-- All Javascript Script  -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
    <script src="plugins/main.js"></script>

    <script src="js/main.js"></script>
</body>
</html>
