<?php
require_once 'include1/fun.php';
	require_once 'connection.php';
	if (isset($_POST['add'])) {
		$img1 =upload($_FILES["img1"],"../img/game/");
		$img2 = upload($_FILES["img2"],"../img/game/");
		$img3 = upload($_FILES["img3"],"../img/game/");
		$img4 = upload($_FILES["img4"],"../img/game/");
		$img5 = upload($_FILES["img5"],"../img/game/");
		$img6 = upload($_FILES["img6"],"../img/game/");

		$query = "INSERT INTO gameimage(`img1`,`img2`,`img3`,`img4`,`img5`,`img6`) VALUES ('$img1','$img2','$img3','$img4','$img5','$img6')";


		$query_run = mysqli_query($conn,$query);
		if($query_run){
			
			?>
			<script>
				alert("Images Added");
			</script>
			<?php
			header('Location:gameimage.php');
		}
		else{
			?>
			<script>
				alert("Images Failed To add");

			</script>
			<?php
			header('Location:gameimage.php');
		}

	}
?>