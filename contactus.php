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

    <!-- contact us area start -->
    
    <section class="contact-form">
            <form action="contacthere.php" method="POST">
            <!--left--------------------------------------->
            <div class="contact-left">
            <h1 class="c-l-heading"><font style="border-bottom: 3px solid #20d8da;">Contact us</font></h1>
            <!--name-------->
            <div class="f-name">
            <font >Name</font>
            <input type="text" name="cname" placeholder="Full Name" required>
            </div>
            <!--email-------->
            <div class="f-email">
            <font >Email</font>
            <input type="email" name="cemail" placeholder="Example@gmail.com" required>
            </div>
            </div>
            <!--right------------------------------------------->
            <div class="contact-right">
            <!--message-------->
            <div class="message">
            <font >Message</font>
            <textarea name="emsg" rows="5" cols="20" placeholder="Write Message..."></textarea>
            </div>
            <!--submit-btn------------>
            <button style="cursor: pointer;" type="submit" name="contact">submit</button>
            </div>                
            </form>           
	</section>

    <!-- contact us area end -->
  

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
