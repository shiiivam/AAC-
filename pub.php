<?php

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Fjalla+One&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Righteous&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
<link href="ct.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
<link href="https://fonts.googleapis.com/css?family=Bad+Script|Dancing+Script|Galada|Great+Vibes|Kaushan+Script|Lobster|Merienda|Parisienne|Playball|Tangerine&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Libre+Baskerville&display=swap" rel="stylesheet">
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
<body style="background-color:#f4f1fa;">
<header style="background-color:white;">
<div style="margin-top:5px;height:20px;width:100%;background-color:lavender;"><p style="margin-top:2px;float:right;margin-right:20px;"><u>English</u></p></div>
<div class="container-fluid" style="margin-top:2px;">
  <div class="row">
    <div class="col-sm-2"><a href="home.php" style=" font-size:15px;margin-left:5px;;color:white;
    text-decoration: none;"><img class="logo" src="la.png" style= "height:140px;width:180px;"alt="logo"></a></div><h1><i>
    <div class="col-sm-9" style="position:absolute;left:200px;px;top:100px;font-size:80px;font-family:Verdana, Geneva, sans-serif;"><h1><i>The 24/7 Car Trading Platform</i></h1>
</div>
  </div>
  <div class="col-sm-3" style="margin-left:950px;position:absolute;left:150px;px;top:15px;font-size:80px;font-family:Verdana, Geneva, sans-serif;">  
<img src="g.png" style="margin-top:35px;marginleft:20px;"height=50px width=50px>
<a href="evaluation.php" style=" font-size:15px;margin-left:5px;;color:white;
    text-decoration: none;"><button class="animated fadeInUp delay-1.0s" style="padding:0;border:0;border:none;background-color:#CC0000 ;border-radius:20px;width:250px;height:40px;font-size:15px;text-color:white;"><img class="animated infinite zoomIn delay-1s" src="t.png" style="margin-right:50px;" height=25px width=25px>Live Evaluation</button></a>
  
  </div>
</div>
</header>`

<div style="position:absolute;top:25.5%;bottom:45%;margin-top:100px;opacity:1;background-color:#2E8BC0;height:80px;width:100%;margin-top:10px;outline-style:inset;outline-color:#72bcd4;outline-width:5px;">
<h1 style="color:white;margin-top:20px;margin-left:20px;"> <I>ALL ABOUT CARS</i></div>
<br><br><br><br><br><br><br><br><br><br>

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



<br><br><br><br><br><br><br>








<footer class="footer-distributed" style="background-color:blue;;height:200px;">
	<div class="footer-left" style="margin-top:100p;">

			<center>	<h3><span><img src="la.png" style="position:absolute;margin-left:580px;"></span></h3></center>
			</div>
</div>
</div></div>
			</div>
		</footer>




<br><br>
  






<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
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