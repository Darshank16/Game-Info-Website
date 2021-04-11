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

   
  <!--  about us area start -->

    
    <section class="about">
        
        <div class="about-text">
            <h1>About Us</h1>
            <h2 style="font-family: "Open Sans", sans-serif;">This is Just a College Project</h2>
            <p>Hello! Darshan here,developing this website only for clg project.I have used html,css,bootstrap,animate.css,wow.js and many other codes and libraries.Don't know what should i type here more,but i have to fill up the space thats why typing this nonsense stuffs here.Ok enough now,good bye!</p>
            <a href="contactus.php">Contact Us</a>
        </div>
        
        <div class="about-model">
        	<img src="img/bg-img/aboutusimg.png" />
        </div>
    </section>

    <!-- abous us area end -->
  

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
