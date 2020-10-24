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

	echo $result0["pass"];

	$result0 = $query->fetch_assoc();
	$result1 = $query->fetch_assoc();
	$result2 = $query->fetch_assoc();

	$result3 = $query->fetch_assoc();
	$result4 = $query->fetch_assoc();
	$result5 = $query->fetch_assoc();

	$result6 = $query->fetch_assoc();
	$result7 = $query->fetch_assoc();
	$result8 = $query->fetch_assoc();
?>
<a href="https://20urokNM/admin.php">ADMIN</a>

<meta charset="utf-8">

<style type="text/css">
	.img-left{
		position: relative;
		height: 505px;
		width: 210px;
		transition: 1s;	
		top: 0px;
		left: 0px;
	}

	.img-left:hover{
		transition: 1s;	
		height: 505px;
		width: 210px;
		top: -16px;
		left: 25px;	
		z-index: 9999;	
	}

	.img-center{
		position: relative;
		height: 505px;
		width: 210px;
		transition: 1s;	
		top: 0px;
		left: 0px;
	}

	.img-center:hover{
		transition: 1s;	
		height: 505px;
		width: 210px;
		top: -16px;	
		z-index: 9999;	
	}

	.img-right{
		position: relative;
		height: 505px;
		width: 210px;
		transition: 1s;	
		top: 0px;
		left: 0px;
	}

	.img-right:hover{
		transition: 1s;	
		height: 505px;
		width: 210px;
		top: -16px;
		left: -25px;	
		z-index: 9999;	
	}
	
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

	.button-price {
		position: relative;
		padding-top: 5px;
		padding-bottom: 5px;
		padding-left: 10px;
		padding-right: 10px;
		border-radius: 10px;
		background-color: white;
		border: solid black 1px;
		top: 0px;
		transition: 1s;
	}

	.button-price:hover{
		top: -11px;
		background-color: white;
		z-index: 9999;

		transition: 1s;
	}
	
</style>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
 
<body class="bg-light">
	<div class="col-12 header pb-2 border-bottom">
		<div class="col-1 mx-auto">
			<form method="GET" action="http://20urokNM/admin.php">
				<button class="button">Что тебе ещё нужно то?</button>
			</form>
		</div>
	</div>

	<div class="col-12">
		<div class="col-12" style="height: 1500px;">
			<div class="row mt-5">
				<div class="col-4 border">
					<div class="col-11 mx-auto">
						<?php
							echo "<img src='".$result0["img"]."' class='w-100 img-left'>";
						?>
					</div>
					<div class="col-11 mx-auto mt-2 bg-light">
					
							<div class="col-12 pl-1">
								<?php
									echo "<h2>".$result0["name"]."</h2>";
								?>
							</div>

							<div class="col-12 pl-1 mt-3 inform">
								<?php
									echo "<button class='bg-light button-price' style='font-size: 18px; border: solid black;'><big>".$result0["price"]." руб.</big></button>";
								?>
							</div>
						
					</div>
				</div>

				<div class="col-4 border">
					<div class="col-11 mx-auto">
						<?php
							echo "<img src='".$result1["img"]."' class='w-100 img-center'>";
						?>
					</div>
					<div class="col-11 mx-auto mt-2 bg-light">
						<div class="col-12 pl-1">
							<?php
								echo "<h2>".$result1["name"]."</h2>";
							?>
						</div>

						<div class="col-12 pl-1 mt-3">
							<?php
								echo "<button class='bg-light button-price' style='font-size: 18px; border: solid black;'><big>".$result1["price"]." руб.</big></button>";
							?>
						</div>
					</div>
				</div>

				<div class="col-4 border">
					<div class="col-11 mx-auto">
						<?php
							echo "<img src='".$result2["img"]."' class='w-100 img-right'>";
						?>
					</div>
					<div class="col-11 mx-auto mt-2 bg-light">
						<div class="col-12 pl-1">
							<?php
								echo "<h2>".$result2["name"]."</h2>";
							?>
						</div>

						<div class="col-12 pl-1 mt-3">
							<?php
								echo "<button class='bg-light button-price' style='font-size: 18px; border: solid black;'><big>".$result2["price"]." руб.</big></button>";
							?>
						</div>
					</div>
				</div>
			</div>
			<div class="row mt-5">
				<?php 
					if($result3["pass"]=="new"){
						echo "<div class='col-4 border'>";
							echo "<div class='col-11 mx-auto'>";
								echo "<img src='".$result3["img"]."' class='w-100 img-left'>";
							echo "</div>";
							echo "<div class='col-11 mx-auto mt-2 bg-light'>";
								echo "<div class='col-12 pl-1'>";
									echo "<h2>".$result3["name"]."</h2>";
								echo "</div>";

								echo "<div class='col-12 pl-1 mt-3'>";
									echo "<button class='bg-light button-price' style='font-size: 18px; border: solid black;'><big>".$result3["price"]." руб.</big></button>";
								echo "</div>";		
							echo "</div>";
						echo "</div>";
					}	
				?>

					
				

				<?php 
					if($result4["pass"]=="new"){
						echo "<div class='col-4 border'>";
							echo "<div class='col-11 mx-auto'>";
								echo "<img src='".$result4["img"]."' class='w-100 img-center'>";
							echo "</div>";
							echo "<div class='col-11 mx-auto mt-2 bg-light'>";
								echo "<div class='col-12 pl-1'>";
									echo "<h2>".$result4["name"]."</h2>";
								echo "</div>";

								echo "<div class='col-12 pl-1 mt-3'>";
									echo "<button class='bg-light button-price' style='font-size: 18px; border: solid black;'><big>".$result4["price"]." руб.</big></button>";
								echo "</div>";		
							echo "</div>";
						echo "</div>";
					}
				?>

				<?php 
					if($result5["pass"]=="new"){
						echo "<div class='col-4 border'>";
							echo "<div class='col-11 mx-auto'>";
								echo "<img src='".$result5["img"]."' class='w-100 img-right'>";
							echo "</div>";
							echo "<div class='col-11 mx-auto mt-2 bg-light'>";
								echo "<div class='col-12 pl-1'>";
									echo "<h2>".$result5["name"]."</h2>";
								echo "</div>";

								echo "<div class='col-12 pl-1 mt-3'>";
									echo "<button class='bg-light button-price' style='font-size: 18px; border: solid black;'><big>".$result5["price"]." руб.</big></button>";
								echo "</div>";		
							echo "</div>";
						echo "</div>";
					}
				?>
			</div>
		</div>

		<div class="row mt-5">
				<?php 
					if($result6["pass"]=="new"){
						echo "<div class='col-4 border'>";
							echo "<div class='col-11 mx-auto'>";
								echo "<img src='".$result6["img"]."' class='w-100 img-left'>";
							echo "</div>";
							echo "<div class='col-11 mx-auto mt-2 bg-light'>";
								echo "<div class='col-12 pl-1'>";
									echo "<h2>".$result6["name"]."</h2>";
								echo "</div>";

								echo "<div class='col-12 pl-1 mt-3'>";
									echo "<button class='bg-light button-price' style='font-size: 18px; border: solid black;'><big>".$result6["price"]." руб.</big></button>";
								echo "</div>";		
							echo "</div>";
						echo "</div>";
					}	
				?>

					
				

				<?php 
					if($result7["pass"]=="new"){
						echo "<div class='col-4 border'>";
							echo "<div class='col-11 mx-auto'>";
								echo "<img src='".$result7["img"]."' class='w-100 img-center'>";
							echo "</div>";
							echo "<div class='col-11 mx-auto mt-2 bg-light'>";
								echo "<div class='col-12 pl-1'>";
									echo "<h2>".$result7["name"]."</h2>";
								echo "</div>";

								echo "<div class='col-12 pl-1 mt-3'>";
									echo "<button class='bg-light button-price' style='font-size: 18px; border: solid black;'><big>".$result7["price"]." руб.</big></button>";
								echo "</div>";		
							echo "</div>";
						echo "</div>";
					}
				?>

				<?php 
					if($result8["pass"]=="new"){
						echo "<div class='col-4 border'>";
							echo "<div class='col-11 mx-auto'>";
								echo "<img src='".$result8["img"]."' class='w-100 img-right'>";
							echo "</div>";
							echo "<div class='col-11 mx-auto mt-2 bg-light'>";
								echo "<div class='col-12 pl-1'>";
									echo "<h2>".$result8["name"]."</h2>";
								echo "</div>";

								echo "<div class='col-12 pl-1 mt-3'>";
									echo "<button class='bg-light button-price' style='font-size: 18px; border: solid black;'><big>".$result8["price"]." руб.</big></button>";
								echo "</div>";		
							echo "</div>";
						echo "</div>";
					}
				?>
			</div>
		</div>

	</div>

</body>

