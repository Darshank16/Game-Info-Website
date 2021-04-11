<?php
require_once 'include1/fun.php';
	require_once 'connection.php';
	if (isset($_POST['add'])) {
		$gimg =upload($_FILES["img"],"../img/game/");
		$gthumb = upload($_FILES["thumb"],"../img/game/");
		$genre = $_POST['genre'];
		$gtitle = $_POST['title'];
		$gintro = $_POST['intro'];
		$gstory = $_POST['story'];
		$grelease = $_POST['release'];
		$gcomp = $_POST['comp'];
		$greq = $_POST['req'];
		$gprice = $_POST['price'];

		$query = "INSERT INTO gameinfo(`img`,`thumbnail`,`genre`,`gtitle`,`gintro`,`gstory`,`grelease`,`gcompatible`,`greq`,`gprice`) VALUES ('$gimg','$gthumb','$genre','$gtitle','$gintro','$gstory','$grelease','$gcomp','$greq','$gprice')";

		$query_run = mysqli_query($conn,$query);
		if($query_run){
			
			echo "Added";
			header('Location:gameinfo.php');
		}
		else{
			
			header('Location:gameinfo.php');
		}

	}
?>