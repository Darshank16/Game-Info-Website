<?php
    session_start();
    require_once 'connection.php';

    if(isset($_POST['contact'])){
        $name = $_POST['cname'];        
        $email = $_POST['cemail'];
        $msg = $_POST['emsg'];
        
        
        

        $insertquery = "insert into contactus(name,email,msg)values('$name','$email','$msg')";
        
        $iquery = mysqli_query($conn,$insertquery);

        if($iquery)
        {
                ?>
                    <script>
                        alert("Message Sent.");
                        location.replace("homepage.php");
                    </script>
                <?php

                }else{
                ?>
                    <script>
                         alert("Message Fail.Try Again");
                         location.replace("homepage.php");
                     </script>
                <?php

        }
    }
?>