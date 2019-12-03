<?php
	session_start();
	if($_POST["trainno"] !='' && $_POST["traintype"] !='' && $_POST["origin"] !='' && $_POST["destination"] !=''  && $_POST["dtime"] !=''  && $_POST["atime"] !=''  && $_POST["seatprice"] !=''  && $_POST["totalseat"] !=''){

        $trainno = $_POST["trainno"];
        $traintype = $_POST["traintype"];
        $origin = $_POST["origin"];
        $destinantion = $_POST["destination"];
        $dtime = $_POST["dtime"];
        $atime = $_POST["atime"];
        $seatprice = $_POST["seatprice"];
        $totalseat = $_POST["totalseat"];


        $connection = new mysqli('localhost', 'root', '', 'rss');
        $sql = "INSERT INTO train_details (TRAINNO, TRAINTYPE, ORIGIN, DESTINATION, DEPARTURETIME, ARRIVALTIME, SEATPRICE, TOTALSEATS)
         VALUES ('$trainno', '$traintype', '$origin', '$destinantion','$dtime', '$atime', '$seatprice', '$totalseat')";
        //echo $sql;
        $result = $connection->query($sql);
        var_dump($result);
        $_SESSION['alert']="New Train Info Added";

        } else
        {
         $_SESSION['alert']="Missing fields";   
        }

	header("location:addtrainview.php");
	

?>
