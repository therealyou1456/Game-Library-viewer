<?php
error_reporting(E_PARSE | E_ERROR);

include_once('connection.php');
$query="select*from developers";
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
		<th colspan="4"><h2><font color=red>DEVELOPER DETAILS</h2></th>
	</tr>
	<t>
		<th><h3><font color="black">D ID</h3></th>
 		<th><h3><font color="black">D NAME</h3></th>
	</t>
<?php
while($rows=mysql_fetch_assoc($result))
{
?>
<tr>

<td><?php echo $rows['d_id']; ?> </td>
<td><?php echo $rows['d_name']; ?> </td>
</tr>
<?php
}
?>
</table>
<br>
</body>
</html>