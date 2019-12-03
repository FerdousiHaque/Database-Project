<?php
session_start();
var_dump($_POST);
if($_POST["update-user"]!='' && $_POST["id"]) {
	$id=$_POST["id"];
	$updateuser = $_POST["update-user"];

	$connection = new mysqli("localhost","root", "" , "rss");
	$sql = "UPDATE customer SET ROLE='$updateuser' WHERE C_ID=$id";

	$result = $connection->query($sql);
	var_dump($_POST);

	  $_SESSION['alert']="Customer Info Updated";
      header("location:userdetails.php");
}
else {
		$_SESSION['alert']="Not Updated";
        header("location:userdetails.php");
}

?>