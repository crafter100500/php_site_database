<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<?php
	$connect = mysqli_connect("127.0.0.1","root","","20urokNM");
	if($connect==false){
		echo "false";
	} else{
		echo "true";
	}

	$query_text = "SELECT * FROM store";

	$query = mysqli_query($connect, $query_text); //мы взяли всю таблицу
	if($query==false){
		echo "doesn't work";
	} else{
		echo "works";
	}
?>

<style type="text/css">
	.button {
		position: relative;
		padding-top: 5px;
		padding-bottom: 5px;
		width: 200px;
		border-radius: 20px;
		background-color: white;
		border: solid black 1px;
		transition: 1s;
	}

	.button:hover{
		background-color: black;
		color: white;
		z-index: 9999;
		transition: 1s;
	}
</style>

<body class="bg-light">
	<div class="col-12 header pb-2 border-bottom">
		<div class="col-1 mx-auto">
			<form method="GET" action="http://20urokNM/index.php">
				<button class="button">Отступаем!</button>
			</form>
		</div>
	</div>

	<form action="insert.php" method="GET">
	  <div class="form-group">
	    <label for="exampleInputEmail1">Name</label>
	    <input type="text" class="form-control" name="name" aria-describedby="emailHelp">
	  </div>
	  <div class="form-group">
	    <label for="exampleInputPassword1">Description</label>
	    <input type="text" class="form-control" name="description">
	  </div>
	  <div class="form-group">
	    <label for="exampleInputPassword1">Img</label>
	    <input type="text" class="form-control" name="img">
	  </div>
	  <div class="form-group">
	    <label for="exampleInputPassword1">Price</label>
	    <input type="text" class="form-control" name="price">
	    <input type="hidden" class="form-control" name="pass" value="new">
	  </div>
	  <button type="" class="btn btn-primary">Submit</button>
	</form>
</body>
