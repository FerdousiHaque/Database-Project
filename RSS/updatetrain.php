<?php
	session_start();
    if($_POST["select-train"]!='' && $_POST["up-trainno"]!='' && $_POST["up-traintype"]!='' && $_POST["up-origin"]!='' && $_POST["up-destination"]!='' && $_POST["up-destination"]!='' && $_POST["up-dtime"]!='' && $_POST["up-atime"]!='' && $_POST["up-seatprice"]!='' && $_POST["up-totalseat"]!='')
    {
        $selettrain = $_POST["select-train"];
        $trainno = $_POST["up-trainno"];
        $traintype = $_POST["up-traintype"];
        $origin = $_POST["up-origin"];
        $destinantion = $_POST["up-destination"];
        $dtime = $_POST["up-dtime"];
        $atime = $_POST["up-atime"];
        $seatprice = $_POST["up-seatprice"];
        $totalseat = $_POST["up-totalseat"];
        
        $connection = new mysqli('localhost', 'root', '', 'rss');


        $sql = "UPDATE train_details SET TRAINNO=$trainno, TRAINTYPE='$traintype', ORIGIN='$origin', DESTINATION='$destinantion', DEPARTURETIME='$dtime', ARRIVALTIME='$atime', SEATPRICE=$seatprice, TOTALSEATS=$totalseat WHERE TRAINNO=$selettrain";
        $result = $connection->query($sql);
        var_dump($_POST);

        $_SESSION['alert']="Train Info Updated";
        header("location:addtrainview.php");
	}
	
    else
    {
        $_SESSION['alert']="Missing some fields";
        header("location:addtrainview.php");
    }
	

?>
