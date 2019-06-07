<html>
<body bgcolor="#fbd8cp">
<br>
<br>
<br>
<center>
<?php 
    $con = mysqli_connect('localhost','root','','gaming') or die("Unable to selectdatabase: ". mysqli_error($con));
   
    echo " Calling Stored Procedure";
    if ($result = mysqli_query($con,"call DEVE()"))
   {             
                while($row = mysqli_fetch_assoc($result))
                {
                      echo "<table border=2><tr><th>variety_of_games</th><th>game_list</th><th>t_id</th><th>unique_id</th><th>storage_space</th></tr>";
                  
                        echo "<tr><td>".$row["variety_of_games"]."</td><td>".$row["game_list"]."</td><td>".$row["t_id"]."</td><td>".$row["unique_id"]."</td><td>".$row["storage_space"]."</td></tr>";                   
                    echo "</table>";
                }
    }else{
                    echo "Table is Empty!";
                }  
     mysqli_close($con); 
?>
</center>
</body>
</html>