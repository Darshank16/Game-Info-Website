<?php
session_start();
require_once 'connection.php';
$sql = "SELECT * FROM gameinfo";
$result = $conn->query($sql);

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

    <!--  Breadcrumb Area Start  -->
    <div class="breadcrumb-area bg-img bg-overlay" style="background-image: url(img/bg-img/27.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <!-- Breadcrumb Text -->
                <div class="col-12">
                    <div class="breadcrumb-text">
                        <h2>Games</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  Breadcrumb Area End  -->

    <!--  Game Review Area Start  -->
    <section class="game-review-area section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <?php while($row = $result->fetch_assoc()){?>
                    <!-- *** Single Review Area *** -->
                    <div class="single-game-review-area d-flex flex-wrap mb-30">
                        <div class="game-thumbnail">
                            <img src="img/game/<?php echo $row["img"]; ?>" alt="">
                        </div>
                        <div class="game-content">
                            <span class="game-tag"><?php echo $row["genre"]; ?></span>
                            <a href="gamepage.php?id=<?php echo $row["gameid"];?>" class="game-title"><?php echo $row["gtitle"]; ?></a>
                            
                            <p><?php echo $row["gintro"];?></p>
                            
                            
                        </div>
                    </div>
                <?php } ?>

                </div>
            </div>
        </div>
    </section>
    <!--  Game Review Area End  -->

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
</body>
</html>
