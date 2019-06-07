<?php
error_reporting(E_PARSE | E_ERROR);

include_once('connection.php');
$query="select*from watch_games";
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
		<th colspan="4"><h2><font color=red>GAMES AVAILABLE TO WATCH</h2></th>
	</tr>
	<t>
		<th><h3><font color="black">Unique id</h3></th>
 		<th><h3><font color="black">Console</h3></th>
		<th><h3><font color="black">Delay</h3></th>
		<th><h3><font color="black">W id</h3></th>
	</t>
<?php
while($rows=mysql_fetch_assoc($result))
{
?>
<tr>

<td><?php echo $rows['unique_id']; ?> </td>
<td><?php echo $rows['console']; ?> </td>
<td><?php echo $rows['delay']; ?> </td>
<td><?php echo $rows['w_id']; ?> </td>
</tr>
<?php
}
?>
</table>
<br>
</body>
</html>