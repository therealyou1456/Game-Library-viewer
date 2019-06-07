<html>
<body>
<?php
error_reporting(E_PARSE | E_ERROR);
$con=mysql_connect("localhost","root","");
if(!$con)
{ 
die("could not connect".mysql_error());
}
mysql_select_db("gaming");
$unique_id=$_POST["t1"];
$var=mysql_query("select * from users where unique_id='$unique_id'");
echo "<table border=1>";
echo "<tr>
<th>user_name</th>
<th>unique_id</th>
<th>passwd</th>
</tr>";
while($arr=mysql_fetch_row($var))
{ echo "<tr>
<td>$arr[0]</td>
<td>$arr[1]</td>
<td>$arr[2]</td>
</tr>";}
echo "</table>";
mysql_free_result($var);
mysql_close($con);
?>
<form action="search.php" method="POST">
<input type="SUBMIT"/ value="SUBMIT">
<input type="SUBMIT"/ value="BACK">
</form>
</body>
</html>