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
$product_id=$_POST["t1"];
$var=mysql_query("select * from products where product_id='$product_id'");
echo "<table border=1>";
echo "<tr>
<th>product_id</th>
<th>product_name</th>
<th>product_price</th>
<th>quantity_available</th>
<th>product_description</th>
<th>d_id</th>
</tr>";
while($arr=mysql_fetch_row($var))
{ echo "<tr>
<td>$arr[0]</td>
<td>$arr[1]</td>
<td>$arr[2]</td>
<td>$arr[3]</td>
<td>$arr[4]</td>
<td>$arr[5]</td>
</tr>";}
echo "</table>";
mysql_free_result($var);
mysql_close($con);
?>
<input type="SUBMIT"/>
</form>
</body>
</html>