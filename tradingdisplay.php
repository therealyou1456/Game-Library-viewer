<?php
error_reporting(E_PARSE | E_ERROR);

include_once('connection.php');
$query="select*from trading";
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
		<th colspan="4"><h2><font color=red>TRADING LIST </h2></th>
	</tr>
	<t>
		<th><h3><font color="black">t_id</h3></th>
	</t>
<?php
while($rows=mysql_fetch_assoc($result))
{
?>
<tr>

<td><?php echo $rows['t_id']; ?> </td>
</tr>
<?php
}
?>
</table>
<br>
</body>
</html>