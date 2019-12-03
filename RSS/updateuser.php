<?php
	session_start();
   
  if($_POST['up-name']!='' && $_POST['up-age']!='' && $_POST['up-gender']!='' && $_POST['up-pass']!='' && $_POST['up-add']!='')
  {

	$name=$_POST['up-name'];
    $age=$_POST['up-age'];
    $gender=$_POST['up-gender'];
    $phone=$_SESSION['id'];
    $add=$_POST['up-add'];
    $pass=$_POST['up-pass'];
        
        $conn = new mysqli("localhost","root","","rss");
        $sql = "UPDATE customer SET C_NAME='$name', AGE='$age', GENDER='$gender', ADDRESS='$add', PASS='$pass' WHERE PHONENO=$phone";
        
        $result  = $conn->query($sql);
        var_dump($_POST);
        
        $_SESSION['alert']= "Information Updated";
        header("location:profile.php");
	}
    else
    {
        $_SESSION['alert']= "Missing Feilds";
    }
	header("location:profile.php");
	
?>


