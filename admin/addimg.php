<?php
session_start();
require_once 'connection.php';
$sql = "SELECT * FROM gameimage";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">


    <?php include 'include1/sidebar.php';?>

    <?php include 'include1/topnav.php';?>

    <form action="imagesadd.php" method="POST" enctype="multipart/form-data">
    <div class="card-body">
	  
	  <div class="form-group">
	    <label>Image1</label>
	    <input type="file" class="form-control-file" name="img1">
	  </div>
	  <div class="form-group">
	    <label>Image2</label>
	    <input type="file" class="form-control-file" name="img2">
	  </div>
	  <div class="form-group">
	    <label>Image3</label>
	    <input type="file" class="form-control-file" name="img3">
	  </div>
	  <div class="form-group">
	    <label>Image4</label>
	    <input type="file" class="form-control-file" name="img4">
	  </div>
	  <div class="form-group">
	    <label>Image5</label>
	    <input type="file" class="form-control-file" name="img5">
	  </div>
	  <div class="form-group">
	    <label>Image6</label>
	    <input type="file" class="form-control-file" name="img6">
	  </div>
	  
	  <button type="submit" class="btn btn-primary" name="add">Add</button>
	</div>
	</form>


	

	

    

    <?php include 'include1/jsfiles.php';?>
                  
</body>

</html>