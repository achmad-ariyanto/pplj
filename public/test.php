<?php

$connect = mysqli_connect("127.0.0.1","root","","test");
#mysqli_select_db($connect,"v-u-a-p");

?>

<?php
    if(isset($_GET['id'])){
		$id = $_GET['id'];
		
		$query = mysqli_query($connect, "SELECT * FROM music WHERE id='$id'");
		while($row = mysqli_fetch_assoc($query))
		{
			$name = $row['name'];
			$url = $row['url'];
		}
		
		echo "<audio control src=$url></audio>";
		
		
	}
	?>
