<?php
session_start();
if( $_POST["train"]!='')
{
	$trainno = $_POST["train"];

	$connection= new mysqli("localhost","root","","rss");
	$sql = "DELETE trainno WHERE TRAINNO=trainno";

	$result = $connection->query($sql);
	var_dump($_POST);

	$_SESSION['alert']="Train Deleted";
        header("location:addtrainview.php");
}else
    {
    	$_SESSION['alert']="Not Deleted";
        header("location:addtrainview.php");
    }
?>