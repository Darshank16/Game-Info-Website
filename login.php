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

    <?php 
        require_once 'connection.php';
        if(isset($_POST['submit'])){
            $username = $_POST['username'];
            $password = md5($_POST['password']);

            $loginquery = "select * from users where username= '$username' AND password='$password'";
            $query = mysqli_query($conn,$loginquery);

            $username_count = mysqli_num_rows($query);
            if($username_count){
                $user = mysqli_fetch_assoc($query);
                $_SESSION["loggedin"]=true;
                $_SESSION["username"]=$user["username"];
                $_SESSION["level"]=$user["level"];
                if ($user["level"]=="admin") {
                    ?>
                        <script>
                            alert("Logged In.");
                            location.replace("admin/index.php");
                        </script>

                    <?php
}else{
                   ?>
                        <script>
                            alert("Logged In.");
                            location.replace("homepage.php");
                        </script>
                    <?php
                }
            }
            else{
                $password_error = 'Email or password is incorrect. Try again or click Forgot password to reset it.';
            }

            
        }   
    ?>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
        <div class="content">
            <div class="text">Login Form</div>
            <form action="connection.php">
                <div class="field">
                    <span class="fas fa-user"></span>
                    <input type="text" name="username" required /><br/>
                    <label>Username</label>                   
                </div>
                <div style="text-align: left; margin-top: -20px;" >
                    <?php 
                        if(isset($email_error)){
                            ?><p style="color: #d93025;"><?php echo $email_error ?></p><?php
                        }
                    ?>
                </div>
                  <div class="field">
                    <span class="fas fa-lock"></span>
                    <input type="password" name="password" required /><br/>
                    <label>Password</label>      
                </div>
                <div style="text-align: left; margin-top: -20px;" >
                    <?php 
                        if(isset($password_error)){
                            ?><p style="color: #d93025;"><?php echo $password_error ?></p><?php
                        }
                    ?>
                </div>
                <div class="forgotpass"><a href="#">Forgot Password?</a></div>
                <button type="submit" name="submit">Log in</button>
                <div class="signup">Not a member?<a href="register.php">signup here</a></div>
                <div class="gohome"><i class="fas fa-arrow-left"></i><a href="homepage.aspx">Back to Homepage</a></div>
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
