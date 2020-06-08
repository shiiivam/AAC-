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

</head>
<body style="background-color:#f4f1fa;">
<header style="background-color:white;">
<div style="margin-top:5px;height:20px;width:100%;background-color:lavender;"><p style="margin-top:2px;float:right;margin-right:20px;"><u>English</u></p></div>
<div class="container-fluid" style="margin-top:2px;">
  <div class="row">
    <div class="col-sm-2"><a href="home.php" style=" font-size:15px;margin-left:5px;;color:white;
    text-decoration: none;"><img class="logo" src="la.png" style= "height:140px;width:180px;"alt="logo"></a></div>
    <div class="col-sm-9" style="position:absolute;left:200px;px;top:110px;font-size:80px;font-family:Verdana, Geneva, sans-serif;"><h1><i>The 24/7 Car Trading Platform</i></h1>
<h5></h5></div>
  </div>
  <div class="col-sm-3" style="margin-left:950px;position:absolute;left:150px;px;top:15px;font-size:80px;font-family:Verdana, Geneva, sans-serif;">  
<img src="g.png" style="margin-top:35px;marginleft:20px;"height=50px width=50px>
<a href="trending.php" style=" font-size:15px;margin-left:5px;;color:white;
    text-decoration: none;"><button class="animated fadeInUp delay-1.0s" style="padding:0;border:0;border:none;background-color:#CC0000 ;border-radius:20px;width:250px;height:40px;font-size:15px;text-color:white;"><img class="animated infinite zoomIn delay-1s" src="t.png" style="margin-right:50px;" height=25px width=25px>Trending</button></a>
  
  </div>
</div>
</header>`

<div style="position:absolute;top:25.5%;bottom:45%;margin-top:100px;opacity:1;background-color:#2E8BC0;height:80px;width:100%;margin-top:10px;outline-style:inset;outline-color:#72bcd4;outline-width:5px;">
<h1 style="color:white;margin-top:20px;margin-left:20px;"> <center>LIVE EVALUATION</center></h1></div>
<br><br><br><br><br><br><br><br><br><br>

<div style="position: relative;
heiht:800px;
    max-width: 1400px; 
    margin: 0 auto;
    cursor:pointer;">
  <img src="be.jpg" alt="Notebook" style="width:100%;height:500px;">
  <div style=" position: absolute; top:0px; background-color: rgba(68, 108, 179, 0.8);]  color:;width: 100%; 
    padding: 20px;width:1400px;height:500px;">
    <center><h3 style="color:white;font-size:25px;">Please Fill The Following Details</h3>
    <p style="color:white;font-size:30px;">
    <div class="container-fluid">
  <div class="row">
  <div class="col-sm-1">
<div style="margin-left:385px;margin-top:10px;width:600px;height:300px;">
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-1" style="width:2px;height:600px;"></div>
    <div class="col-lg-9" style="width:650px;height:300px;" >
    <form>
<ul type="none" style="">
    <li>
        <h2>Select Your Car's Model</h2>
    </li><li>
    <select id="i1" style="background-color:black;style:none;width:200px;">
    <option value="0">Model</option>
    <option value="1">SWIFT</option>
    <option value="2">WAGONR</option>
    <option value="3">BRV</option>
    <option value="4">CITY</option></select></li>
    <li>
        <h2>Car Registration year</h2>
        <p>(As per RC)</p>
    </li>
    </li><li>
    <select id="i2" style="background-color:black;width:200px;">
    <option value="0">Between</option>
    <option value="1">2010-2012</option>
    <option value="2">2013-2015</option>
    <option value="3">2016-2018</option>
    <option value="4">2017-2019</option>
    <option value="5">2020 (Latest)</option>
    </select></li>
    <li>
    <li>
        <h2>Enter your Registration state</h2></li>
        <li>
    <select id="i3" style="background-color:black;width:200px;">
    <option>State</option>
    <option value="0">DL</option>
    <option value="1">UP</option>
    <option value="2">MH</option>
    <option value="3">HR</option>
    <option value="4">UK</option>
    </select></li>
    
    <li>    <h2>Is your car Accidental</h2>
       
    </li>
    <li>
    <select id="i4" style="background-color:black;width:200px;">
    <option value="0">No</option>
    <option value="1">YES</option></select>
</li>
<li><h2> Is Your Vechicle Insured<h2></li>

    <li><select id="i6" style="background-color:black;width:200px;">
    <option value="0">No</option>
    <option value="1">YES</option></select></li>
    <li><h2> Is Your Any Electrical/Mechinical Fault<h2></li>

    <li><select id="i7" style="background-color:black;width:200px;">
    <option value="0">No</option>
    <option value="1">YES</option></select></li>
</ul>
</form>
    
    </div>
    
</div>
</div>
</div>
</div>


</div>
</div> 
</p>
    <button class="animated fadeInUp delay-1.0s" id="if" onclick="eval();" style=" background-color:black ;box-radius:20px;width:250px;height:40px;font-size:15px;margin-top:60px;"> SUBMIT</a> </button>
    <i><h1 id="out" style="color:black;margin-top:50px;font-style:verdana;"></h1></i></center>
    
<br><br><br>
  </div>
</div>
<br><br><br><br><br><br>
<br><br><br><br><br><br><br>
<footer class="footer-distributed" style="background-color:blue;height:200px;">
	<div class="footer-left" style="margin-top:100p;">

			<center>	<h3><span><img src="la.png" style="position:absolute;margin-left:580px;"></span></h3></center>
			</div>
      
</div>
</div></div>
			</div>
		</footer>
<br><br>
<script type="text/javascript">
var swift = 500000;
var wagonr = 450000;
var brv = 900000;
var city = 700000;
var price;
var temp;
function eval() {
    
    
      if(document.getElementById("i1").value =="1"){
        price = swift;     
      }
      else if(document.getElementById("i1").value =="2"){
        price = wagonr;
      }
      else if(document.getElementById("i1").value =="3"){
        price = brv;
      }
      else if(document.getElementById("i1").value =="4"){
        price = city;
      }  
      else{
        document.getElementById("out").innerHTML = "Please Select Model";
      }   
      if(document.getElementById("i2").value == "1"){
          temp=price;
          price=price*35;
          price=price/100;
          price=temp-price;
          
      }
      else if(document.getElementById("i2").value == "2"){
        temp=price;
          price=price*30;
          price=price/100;
          price=temp-price;
        
      }
      else if(document.getElementById("i2").value == "3"){
        temp=price;
          price=price*25;
          price=price/100;
          price=temp-price;
        
      }
      else if(document.getElementById("i2").value == "4"){
        temp=price;
          price=price*20;
          price=price/100;
          price=temp-price;
        
      }
      else if(document.getElementById("i2").value == "5"){
        temp=price;
          price=price*20;
          price=price/100;
          price=temp-price;
          document.getElementById("out").innerHTML = price;
        
      }
      else {
        document.getElementById("out").innerHTML = "Please Select Registration year.";
      }
      if(document.getElementById("i4").value == "1"){
            temp=price;
            price=price*20;
            price=price/100;
            price=temp-price;
      } 
      else {
        price = price;
      }
      document.getElementById("out").innerHTML = "The Estimated cost of your vechicle according to our online Evaluator is around Rs- "+ price+". You can book appontment for manual evaluation at your home without going anywhere with minimal charges! Call Now 011-12635357";
        

}
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
</body>
</html>