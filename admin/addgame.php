<?php
session_start();
require_once 'connection.php';
$sql = "SELECT * FROM gameinfo";
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

    <form action="code.php" method="POST" enctype="multipart/form-data">
    <div class="card-body">
	  
	  <div class="form-group">
	    <label>Image</label>
	    <input type="file" class="form-control-file" name="img">
	  </div>
	  <div class="form-group">
	    <label>Thumbnail</label>
	    <input type="file" class="form-control-file" name="thumb">
	  </div>
	  <div class="form-group">
	    <label>Genre</label>
	    <input type="text" class="form-control" name="genre">
	  </div>
	  <div class="form-group">
	    <label>Title</label>
	    <input type="text" class="form-control" name="title">
	    
	  </div>
	  <div class="form-group">
	    <label>Introduction</label>
	    <textarea type="text" class="form-control" name="intro"></textarea>
	  </div>
	  <div class="form-group">
	    <label>Story</label>
	    <textarea type="text" class="form-control" name="story"></textarea>
	    
	  </div>
	  <div class="form-group">
	    <label>Release</label>
	    <textarea type="text" class="form-control" name="release"></textarea>
	  </div>
	  <div class="form-group">
	    <label>Compatible</label>
	    <input type="text" class="form-control" name="comp">
	    
	  </div>
	  <div class="form-group">
	    <label>PC requirements</label>
	    <textarea type="text" class="form-control" name="req"></textarea>
	  </div>
	  <div class="form-group">
	    <label>Price</label>
	    <input type="text" class="form-control" name="price">
	    
	  </div>
	  
	  <button type="submit" class="btn btn-primary" name="add">Add</button>
	</div>
	</form>


	

	

    

    <?php include 'include1/jsfiles.php';?>
                  
</body>

</html>