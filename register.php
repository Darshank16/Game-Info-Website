<?php
    require_once 'connection.php';

    if(isset($_POST['submit'])){
        $username1 = $_POST['uname'];
        $email1 = $_POST['emailid'];
        $password1 = $_POST['password'];
        $cpassword1=$_POST['cpassword'];
        // encrypt

        $pass = md5($password1);

        $emailquery =" select * from users where email = '$email1'";
        $userquery = " select * from users where username = '$username1'";

        $query = mysqli_query($conn,$emailquery);

        $query1 = mysqli_query($conn,$userquery);

        $emailcount = mysqli_num_rows($query);
        $usernamecount = mysqli_num_rows($query1);

        if($emailcount>0){
            $email1_error = 'EmailID already Exist.';
        }
        elseif ($usernamecount>0) {
            $username1_error = 'Username already Exist.';
        }
        else{
            if($password1 == $cpassword1){

                $insertquery = "insert into users(email,username,password,level)values('$email1','$username1','$pass','user')";

                $iquery = mysqli_query($conn,$insertquery);

                if($iquery){
                    ?>
                        <script>
                            alert("Successfully Registered.");
                            location.replace("login.php");
                        </script>
                    <?php

                    }else{
                    ?>
                        <script>
                            alert("Failed.");
                        </script>
                    <?php

                }

            }else{
                $pass1_error = 'Password are not matching.';
            }
        }




    }
?>
<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <meta charset="utf-8" />
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>GameTech</title>
    <link href="StyleSheet2.css" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Audiowide&family=Open+Sans:ital,wght@0,300;0,400;0,600;1,300;1,400;1,600&display=swap" rel="stylesheet">

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
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
        <div class="content">
            <div class="text">Register Here</div>
            <form action="#">
                <div class="field">
                    <span class="fas fa-user"></span>
                    <input type="email" name="emailid" autocomplete="off" required />
                    <label>Email</label>
                </div>
                <div style="text-align: left; margin-top: -20px;" >
                    <?php 
                        if(isset($email1_error)){
                            ?><p style="color: #d93025;"><?php echo $email1_error ?></p><?php
                        }
                    ?>
                </div>
                <div class="field">
                    <span class="fas fa-user"></span>
                    <input type="text" name="uname" autocomplete="off" required />
                    <label>Username</label>
                </div>
                <div style="text-align: left; margin-top: -20px;" >
                    <?php 
                        if(isset($username1_error)){
                            ?><p style="color: #d93025;"><?php echo $username1_error ?></p><?php
                        }
                    ?>
                </div>
                <div class="field">
                    <span class="fas fa-lock"></span>
                    <input type="password" name="password" required />
                    <label>Password</label>
                </div>
                <div class="field" style="margin-top: -25px;">
                    <span class="fas fa-lock"></span>
                    <input type="password" name="cpassword" required />
                    <label>Confirm Password</label>
                </div>
                <div style="text-align: left; margin-top: -20px;" >
                    <?php 
                        if(isset($pass1_error)){
                            ?><p style="color: #d93025;"><?php echo $pass1_error ?></p><?php
                        }
                    ?>
                </div>               
                <button type="submit" name="submit">Sign up</button>
                
                <div class="gohome"><i class="fas fa-arrow-left"></i><a href="homepage.php">Back to Homepage</a></div>
            </form>
        </div>
    </form>
    

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
