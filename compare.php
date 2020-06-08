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
	<!-- Form for Choosing cars for comparison -->
	<div class="container">
		<div class="page-header">
			<h1>Choose cars to compare</h1>
		</div>
		<form method="POST" action="compare.php">
			<div class="row">
				<div class="col-sm-4">
					<div class="jumbotron">
						<div class="form-group">
							<label>Maruti Suzuki</label>
						</div>
						<div class="checkbox">
							<label><input type="checkbox" name="c1[]" value="Alto">Alto</label>
						</div>
						<div class="checkbox">
							<label><input type="checkbox" name="c1[]" value="Wagon-R">Wagon-R</label>
						</div>
						<div class="checkbox">
							<label><input type="checkbox" name="c1[]" value="Swift">Swift</label>
						</div>
						<div class="checkbox">
							<label><input type="checkbox" name="c1[]" value="Ciaz">Ciaz</label>
						</div>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="jumbotron">
						<div class="form-group">
							<label>Honda</label>
						</div>
						<div class="checkbox">
							<label><input type="checkbox" name="c1[]" value="Amaze">Amaze</label>
						</div>
						<div class="checkbox">
							<label><input type="checkbox" name="c1[]" value="City">City</label>
						</div>
						<div class="checkbox">
							<label><input type="checkbox" name="c1[]" value="BR-V">BR-V</label>
						</div>
						<div class="checkbox">
							<label><input type="checkbox" name="c1[]" value="Accord">Accord</label>
						</div>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="jumbotron">
						<div class="form-group">
							<label>Hyundai</label>
						</div>
						<div class="checkbox">
							<label><input type="checkbox" name="c1[]" value="Eon">Eon</label>
						</div>
						<div class="checkbox">
							<label><input type="checkbox" name="c1[]" value="i10">i10</label>
						</div>
						<div class="checkbox">
							<label><input type="checkbox" name="c1[]" value="Verna">Verna</label>
						</div>
						<div class="checkbox">
							<label><input type="checkbox" name="c1[]" value="Creta">Creta</label>
						</div>
					</div>
				</div>
			</div>
			<button  type="submit" name="b1" class="btn btn-danger btn-lg">Compare</button>
		</form>
	</div>



</body>
</html>
<?php
if(isset($_POST['b1'])){
	$car="";
	$cars=array(""); 
	if(!empty($_POST['c1']))
	{
		foreach($_POST['c1'] as $car){
			array_push($cars,$car);
			

		}
	}
	if(sizeof($cars)>2){
		session_start();
		$_SESSION['cars']=$cars;
		header('location:comparison.php');
	}
	else{
		array_pop($cars);
		echo "<script type='text/javascript'> alert('Select Atleast 2 Options')</script>";
	}
	
	
}
?>