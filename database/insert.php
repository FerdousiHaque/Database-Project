<html>
    <head>
        <title>
            Entry
        </title>
       
        <style>
           
            a {
                text-decoration: none;
                color:darkslateblue;
                float: right;
            }
            div{
                margin: auto;
                margin-top: 5%;
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
                
                background-color: #5588db;
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

    <body style=" background:url(images/bd2.jpg);background-repeat:no-repeat;background-size:100% 100%;
height:700px"/>
        
        <div>
            <form method="post" action="insert.php">
                <h2>Plants Insert</h2>
                PlantID<br/>
                <input type="number" name="id" required><br/>
                Name<br/>
                <input type="text" name="name" required><br/>
               
                <hr>
                <input class="button" name="submit" type="submit" value="ENTER">
                   
            </form> 
        </div>

        <?php
    session_start();
    if(isset($_POST['submit']) ){
        var_dump($_POST);

        $id=$_POST['id'];
        $name = $_POST['name'];
        

        $con = mysqli_connect("localhost","root","","garden");
       /* $sql = "INSERT INTO plant(PlantID,Name) VALUES ('$id', '$name')";
        
        $result = $con->query($sql);
        var_dump($result);*/

        $sql = "SELECT * from plant where PlantID = '$id' and Name = '$name'";
    $row = mysqli_query($con,$sql);
    
    
        $sql1 = "INSERT into  plant(PlantID,Name) VALUES ('$id', '$name')";

        $result = mysqli_query($con, $sql1);

        if($result)
            echo 'Data Inserted Successful';
        else
            echo "Plant Id already exist";
    }


    
?>
       
    </body>
<html>