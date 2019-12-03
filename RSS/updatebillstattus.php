<?php
    if(isset($_POST['rno']))
    {
        $rno = $_POST['rno'];
        $conn = new mysqli("localhost", "root", "", "rss");
        
        $sql = "update reservation set status = 'paid' where RECEIPTNO=$rno";
        //SELECT * FROM (select * from reservation ORDER BY RECEIPTNO DESC) reservation2 WHERE rownum <= 1 ORDER BY rownum DESC;
        $result  = $conn->query($sql);   
        header("location:showbill.php");
    }
?>