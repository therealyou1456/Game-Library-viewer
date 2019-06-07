<?php
error_reporting(E_PARSE | E_ERROR);

include_once('connection.php');
$query="select*from libraryaccess";
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
		<th colspan="4"><h2><font color=red>LIBRARY ACCESS </h2></th>
	</tr>
	<t>
		<th><h3><font color="black">Variety of Games</h3></th>
 		<th><h3><font color="black">Game List</h3></th>
		<th><h3><font color="black">T id</h3></th>
		<th><h3><font color="black">Unique id</h3></th>
		<th><h3><font color="black">Storage Space</h3></th>
	</t>
<?php
while($rows=mysql_fetch_assoc($result))
{
?>
<tr>

<td><?php echo $rows['variety_of_games']; ?> </td>
<td><?php echo $rows['game_list']; ?> </td>
<td><?php echo $rows['t_id']; ?> </td>
<td><?php echo $rows['unique_id']; ?> </td>
<td><?php echo $rows['storage_space']; ?> </td>
</tr>
<?php
}
?>
</table>
<br>
</body>
</html>