<html>
<body bgcolor="#f9f7e4">
<?php
error_reporting(E_PARSE | E_ERROR); 
$con=mysql_connect("localhost","root","");
if(!$con)
{ 
die("could not connect".mysql_error());
}
mysql_select_db("gaming");
$t_id=$_POST["t1"];
$var=mysql_query("select * from trading where t_id='$t_id'");
echo "<table border=1>";
echo "<tr>
<th>t_id</th>
</tr>";
while($arr=mysql_fetch_row($var))
{ echo "<tr>
<td>$arr[0]</td>
</tr>";}
echo "</table>";
mysql_free_result($var);
mysql_close($con);
?>
<input type="SUBMIT"/>
</form>
</body>
</html>