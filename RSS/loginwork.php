<?php
	session_start();
	
    if($_POST["id"]!='' && $_POST["pass"]!='')
	{
		$id = $_POST["id"];
		$pass = $_POST["pass"];
        
        
        $conn = new mysqli("localhost", "root", "" , "rss");
        $sql = "SELECT * FROM customer WHERE PHONENO='$id' AND PASS='$pass'";
        
        $result = $conn->query($sql);
        

        if ($result->num_rows > 0) {
            $first_column = $result->fetch_object();

            $_SESSION['id'] = $id;
            $_SESSION['utype'] = $first_column->ROLE;

            if ($first_column->ROLE == 'admin') {
                header('Location: addtrainview.php');
            } else {
                header('Location: userhome.php');
            }
        } else {
            $_SESSION['alert']="USERNAME or PASSWORD is Incorrect";
            //echo "USERNAME or PASSWORD is incorrect";
            header('Location: login.php');
        }
    }    
        
        
        

?>
