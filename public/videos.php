<?php

$connect = mysqli_connect("127.0.0.1","root","","test");
#mysqli_select_db($connect,"v-u-a-p");

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Video Upload And Playback Tutorial</title>
</head>

<body>

<?php

$result = mysqli_query($connect, "SELECT * FROM videos");
while($row = mysqli_fetch_assoc($result))
{
	$id = $row['id'];
	$name = $row['name'];
	
	echo "<a href='watch.php?id=$id&t=vid'>$name</a><br />";
}

?>

</body>
</html>
