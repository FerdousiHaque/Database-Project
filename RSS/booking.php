<?php
	session_start();

	if(isset($_POST["select"]) && $_POST['seats']){
	    $trainNo=$_POST['select'];
        $date = date('M-d-Y');
        $seat = $_POST['seats'];
        $id = $_SESSION['id'];
        $status = 'queued';
        $conn = new mysqli("localhost","root","","rss");
        $sql2 = "select c_id from customer where phoneno = '$id'";
        $result2 = $conn->query($sql2);

        $row2 = mysqli_fetch_array($result2,MYSQLI_BOTH);
        $cid = $row2[0];
        $_SESSION['cid']=$cid;
        //$status = 'queued';
        settype($seat,'integer');
        settype($cid,'integer');
        $sql = "INSERT INTO reservation(T_NO, CID, SEATREASERVED, R_DATE, STATUS) VALUES ('$trainNo', '$cid', '$seat', '$date', '$status')";
        //$sql = "CALL bookTicket(:p1,:p2, :p3, :p4, :p5)";
        $result  = $conn->query($sql);
        
	}
	header("location:showbill.php");
    //var_dump($_POST);
	
?>
