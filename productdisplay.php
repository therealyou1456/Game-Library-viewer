<?php
error_reporting(E_PARSE | E_ERROR);

include_once('connection.php');
$query="select*from products";
$result=mysql_query($query);
?>
<!DOCTYPE html>
<html>
<head>
<style>
body {
	
background-image:linear-gradient(90deg,gray,white);
}
</style>
</head>
<body>
<font size="4px">
<table align="center" border="1px"style="width:800px; line-height:45px;">
	<tr>
		<th colspan="4"><h2><font color=red>LIST OF PRODUCTS AVAILABLE </h2></th>
	</tr>
	<t>
		<th><h3><font color="black">product id</h3></th>
 		<th><h3><font color="black">product name</h3></th>
		<th><h3><font color="black">product price</h3></th>
		<th><h3><font color="black">quantity available</h3></th>
		<th><h3><font color="black">product description</h3></th>
		<th><h3><font color="black">d id</h3></th>
	</t>
<?php
while($rows=mysql_fetch_assoc($result))
{
?>
<tr>

<td><?php echo $rows['product_id']; ?> </td>
<td><?php echo $rows['product_name']; ?> </td>
<td><?php echo $rows['product_price']; ?> </td>
<td><?php echo $rows['quantity_available']; ?> </td>
<td><?php echo $rows['product_description']; ?> </td>
</tr>
<?php
}
?>
</table>
<br>
</body>
</html>