<?php
session_start();
if(isset($_SESSION['cars'])){
	$cars=$_SESSION['cars'];
	array_shift($cars);
}
?>
<?php
$username="root";
$password="1234";
$host="localhost";
$dbname="aac";
$conn=new mysqli($host,$username,$password,$dbname);
if($conn->connect_error){
	die("Connection Failed : ".$conn->connect_error);
}

?>

<html>
<head>
	<title>Compare</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 
	<style type="text/css">
		.container{
			background-color: white;
			width: 90%;
			min-height: 699px;
		}
		.jumbotron{
			margin-top: 5%; 
		}
	</style>

</head>
<body>
	<!-- Navigation Bar -->
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">	
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.php">AAC</a>
			</div>
			<div class="collapse navbar-collapse" id="mynavbar">
				<ul class="nav navbar-nav navbar-right">
					<li class="active"><a href="compare.php">Compare</a></li>
					<li><a href="evaluation.php">Evaluate</a></li>
				</ul>	
			</div>
		</div>	
	</nav>

<div class="container">
	<div class="page-header">
		<h1>Comparison Between <?php foreach($cars as $car) echo $car." ";?></h1>		
	</div>
	<div class='row'>
		<?php
		foreach($cars as $car){
			$sql="Select * from cars where model='$car'";
			$result = mysqli_query($conn, $sql);
			if (mysqli_num_rows($result) > 0) 
			{
				$row = mysqli_fetch_assoc($result);
 				echo "";
				echo "<div class='col-sm-4'>
					<div class='jumbotron'>";
				 		echo "<h2>".$row['brand_name']." ".$row['model']."</h2>";
				 		echo "<p>Price : ₹".$row['price']."</p>";
				 		echo "<p>Variant : ".$row['variants']."</p>";
				 		echo "<p>Segment : ".$row['body_type']."</p>";
				 		echo "<p>Mileage : ".$row['mileage']."Km/hr</p>";
				 		echo "<p>Fuel Type : ".$row['fuel_type']."</p>";
				 		echo "<p>Engine Capacity : ".$row['cc']."cc</p>";
				 		echo "<p>Power : ".$row['power']."bhp</p>";
				 		echo "<p>Boot Space : ".$row['boot_space']."ltrs</p>";
				 		echo "<p>Seating Capacity : ".$row['seating_capacity']."</p>";



					echo "</div>
				</div>
				";
		
			}
		}
		?>
	
	</div>
</div>




</body>
</html>
