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

    


	

	<!-- Modal -->
    <div class="modal fade" id="deleteuser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="delinfo.php" method="POST">
              <div class="form-group">
                <label for="exampleInputEmail1">Enter Game ID to delete</label>
                <input type="text" class="form-control" name="delid">
                
              </div>
              
              
              <button type="submit" class="btn btn-danger" name="del">Delete</button>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            
          </div>
        </div>
      </div>
    </div>

    <div class="card-body">
    	<a href="addgame.php"><button type="button" class="btn btn-info" >Add Game Information</button></a>
    	<table class="table table-hover" style="padding-top: 100px;">
			  <thead>
			    <tr>
			      <th scope="col" style="width:2%;">ID</th>
			      <th scope="col" style="width:5%;">Img</th>
			      <th scope="col" style="width:5%;">Thumbnail</th>
			      <th scope="col" style="width:5%;">Genre</th>
			      <th scope="col" style="width:5%;">Name</th>
			      <th scope="col" style="width:14%;">Introduction</th>
			      <th scope="col" style="width:14%;">Story</th>
			      <th scope="col" style="width:7%;">Release</th>
			      <th scope="col" style="width:5%;">Compatible</th>
			      <th scope="col" style="width:14%;">PC requirement</th>
			      <th scope="col" style="width:3%;">Price</th>
			      
			      <th scope="col" style="width: 4%;"><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteuser">Delete</button></th>
			      

			      
			    </tr>
			  </thead>
			  <tbody>
			  	<?php while($row = $result->fetch_assoc()){?>
			    <tr>
			      <th scope="row"><?php echo $row["gameid"]; ?></th>
			      <td><?php echo'<img src="../img/game/'.$row["img"].'" width="50px;" height="50px;">'?></td>
			      <td><?php echo'<img src="../img/game/'.$row["thumbnail"].'" width="50px;" height="50px;">'?></td>
			      <td scope="row"><?php echo $row["genre"]; ?></td>
			      <td scope="row"><?php echo $row["gtitle"]; ?></td>
			      <td scope="row"><?php echo $row["gintro"]; ?></td>
			      <td scope="row"><?php echo $row["gstory"]; ?></td>
			      <td scope="row"><?php echo $row["grelease"]; ?></td>
			      <td scope="row"><?php echo $row["gcompatible"]; ?></td>
			      <td scope="row"><?php echo $row["greq"]; ?></td>
			      <td scope="row"><?php echo $row["gprice"]; ?></td>
			            
			      
			      
			      
			    </tr>

			    <?php } ?>
			  </tbody>
		</table>

	</div>

    <?php include 'include1/jsfiles.php';?>
                  
</body>

</html>