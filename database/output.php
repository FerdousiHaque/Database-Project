<html>
	<head>
		<title>
			Date
		</title>
        
        <style>
        
            a {
                text-decoration: none;
                color:darkslateblue;
                float: right;
            }
            div{
                margin: auto;
                margin-top: 12%;
                width: 25%;
                border: 1px solid white;
                padding: 2% 5% 2% 5%;
                background-color: rgba(255, 255, 255, .5);
                border-radius: 5px;
            }
            input{
                width:100%;
                height: 5%;
            }
            .button{
                
                background-color:  #f18973;
                 height: 10%;
                width: 49%;
                color: white;
                font-size: 15;
            }
            h2{
                text-align: center;
            }
        
        </style>
	</head>
	<body style=" background:url(images/bd1.jpg);background-repeat:no-repeat;background-size:100% 100%;
height:700px"/>
        <div>
            <form method="post" action="output.php">
                <h2>Date</h2>
                <font color='black'>Date1:</font><br/>
                <input type="date" name="d1"><br><br/>
                <font color='black'>Date2:</font><br/>
                <input type="date" name="d2"><br><br/>
              
                <hr>
                <input class="button" type="submit" value="Enter">
        
            </form>	
        </div>
        <?php
		
		$da1 = '';
        $da2 ='';

		if(isset($_POST['d1'])){
        $da1 = $_POST['d1'];
        $da2= $_POST['d2'];
	
		}
		

		$conn = mysqli_connect('localhost','root','','garden');

	$query = "select Name, sum(Weight)
from plant,pick
where plant.PlantID = pick.PlantID
and Date between '$da1' and '$da2'
group by plant.Name;";
		   
echo "name     |    pounds  ";?> <br><?php	
echo "------+------------";?> <br><?php	
if ($result = mysqli_query($conn, $query)) {

    /* fetch associative array */
    while ($row = mysqli_fetch_assoc($result)) {
printf ("%s  |  %s\n", $row["Name"], $row["sum(Weight)"]);
    
?>
        <br>
         <?php

    }

     $row_cnt = mysqli_num_rows($result);

    /* free result set */
    mysqli_free_result($result);
}
?>

	</body>
<html>