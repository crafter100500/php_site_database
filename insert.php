<?php
	$connect = mysqli_connect("127.0.0.1","root","","20urokNM");

	$query_text = "SELECT * FROM store";

	$query = mysqli_query($connect, $query_text); //мы взяли всю таблицу

	$insert = "INSERT INTO store (name, description, img, price, pass) 
						  VALUES ('".$_GET["name"]."', '".$_GET["description"]."', '".$_GET["img"]."','".$_GET["price"]."', '".$_GET["pass"]."')";
	$query_insert = mysqli_query($connect, $insert);	
	header('Location: index.php');
?>