<?php
	session_start();
	if($_POST["name"] !='' && $_POST["age"] !='' && $_POST["gen"] !='' && $_POST["phone"] !='' && $_POST["add"] !='' && $_POST["pass"] !=''){
        var_dump($_POST);

    	$name=$_POST['name'];
        $age=$_POST['age'];
        $gen=$_POST['gen'];
        $phone=$_POST['phone'];
        $add=$_POST['add'];
        $pass=$_POST['pass'];
        

        $connection = new mysqli('localhost', 'root', '', 'rss');
        $sql = "INSERT INTO customer(C_NAME, AGE, GENDER, PHONENO, ADDRESS, PASS)
         VALUES ('$name', '$age', '$gen', '$phone','$add', '$pass')";
        echo $sql;
        $result = $connection->query($sql);
        var_dump($result);

        header("Location:login.php");
    }
?>