<?php
	$connect = mysqli_connect("127.0.0.1", "root", "", "20urokNM");

	$text = "DELETE FROM store WHERE ID = '".$_GET["id"]."'";

	mysqli_query($connect, $text);

	header('Location: index.php');
?>