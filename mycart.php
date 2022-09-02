<?php session_start()?>
<!DOCTYPE html>
<html lang="zxx">
<head>
	<!-- Meta Tag -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name='copyright' content=''>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Title Tag  -->
    <title>Eshop - eCommerce HTML5 Template.</title>
	<!-- Favicon -->
	<link rel="icon" type="image/png" href="images/favicon.png">
	<!-- Web Font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
	
	<!-- StyleSheet -->
	
	<!-- Bootstrap -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/css/bootstrap.min.css">
		<!-- Magnific Popup -->
    <link rel="stylesheet" href="css/magnific-popup.min.css">
	<!-- Font Awesome -->
    <link rel="stylesheet" href="css/font-awesome.css">
	<!-- Fancybox -->
	<link rel="stylesheet" href="css/jquery.fancybox.min.css">
	<!-- Themify Icons -->
    <link rel="stylesheet" href="css/themify-icons.css">
	<!-- Nice Select CSS -->
    <link rel="stylesheet" href="css/niceselect.css">
	<!-- Animate CSS -->
    <link rel="stylesheet" href="css/animate.css">
	<!-- Flex Slider CSS -->
    <link rel="stylesheet" href="css/flex-slider.min.css">
	<!-- Owl Carousel -->
    <link rel="stylesheet" href="css/owl-carousel.css">
	<!-- Slicknav -->
    <link rel="stylesheet" href="css/slicknav.min.css">
	<!-- Slicknav -->
	<script src="js/bootstrap.bundle.min.js"></script>


	<!-- Eshop StyleSheet -->
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">

	<style>
	.cart1{
	position: absolute;
    top: 0px;
    left: 633px;
    background-color: orange;
    height: 64px;
    width: 81px;
	color:white;}

	.empty{
		position: absolute;
    	top: 0px;
    	left: 741px;
    	background-color: orange;
    	height: 64px;
    	width: 81px;
		color:white;
	}
	
	body{background-color: rgb(243, 243, 243);}
    #th1{
        width: 250px;
        text-align: left;
        padding-left: 10px;
    }

    #btn1{
        background-color: red;
        font-weight: bold;
        color: whitesmoke;
    }


    .total{
        position: relative;
        right: 70px;
    }

    .total1{
        position: relative;
        left: 104px;
    }
    #btn2 , #btn3{
        outline: none;
        border: none;
        cursor: pointer;
        height: 30px;
        border-radius: 5px;
    }

    #btn3{
        width: 200px;
        background-color: #719EFF;
    }

	</style>
	
</head>

<script language="javascript">
function calculatetotal(n)
{
var n1='t'+n.toString()
var up='up'+n.toString()
var total='total'+n.toString()

var g1=document.getElementById(n1).value
var g2=Number(document.getElementById(up).innerHTML)
var g=g1*g2
document.getElementById(total).innerHTML=g
fgrosstotal();
}
function fgrosstotal()
{
    var n=document.getElementById("noofitems").value;
    var tt=0;
    for (i=0;i<n;i++)
    {
        t='total'+i.toString()
        v=Number(document.getElementById(t).innerHTML)
        tt=tt+v;
    }
    document.getElementById('grosstotal').innerHTML=tt
}
</script>
<body class="js">

	<!-- Preloader -->
	<div class="preloader">
		<div class="preloader-inner">
			<div class="preloader-icon">
				<span></span>
				<span></span>
			</div>
		</div>
	</div>
	<!-- End Preloader -->
	
	
	<!-- Header -->
	<header class="header shop">
		<!-- Topbar -->
		<div class="topbar">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-12 col-12">
						<!-- Top Left -->
						<div class="top-left">
							<ul class="list-main">
								<li><i class="ti-headphone-alt"></i> +92 346-0034737</li>
								<li><i class="ti-email"></i> zainbinpervaiz@gmail.com</li>
							</ul>
						</div>
						<!--/ End Top Left -->
					</div>
					<div class="col-lg-8 col-md-12 col-12">
						<!-- Top Right -->
						<div class="right-content">
							<ul class="list-main">
								<li><i class="ti-location-pin"></i> Store location</li>
								<li><i class="ti-alarm-clock"></i> <a href="#">Daily deal</a></li>
								<li><i class="ti-user"></i> <a href="#">Welcome New User</a></li>
								
							</ul>
						</div>
						<!-- End Top Right -->
					</div>
				</div>
			</div>
		</div>
		<!-- End Topbar -->
		<div class="middle-inner">
			<div class="container">
				<div class="row">
					<div class="col-lg-2 col-md-2 col-12">
						<!-- Logo -->
						<div class="logo">
							<a href="index.php"><img src="images/logo.png" alt="logo"></a>
						</div>
						<!--/ End Logo -->
						<!-- Search Form -->
						<div class="search-top">
							<div class="top-search"><a href="#0"><i class="ti-search"></i></a></div>
							<!-- Search Form -->
							<div class="search-top">
								<form class="search-form">
									<input type="text" placeholder="Search here..." name="search">
									<button value="search" type="submit"><i class="ti-search"></i></button>
								</form>
							</div>
							<!--/ End Search Form -->
						</div>
						<!--/ End Search Form -->
						

				
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Header Inner -->
		<div class="header-inner">
			<div class="container">
				<div class="cat-nav-head">
					<div class="row">
						<div class="col-lg-3">
							
						</div>
						<div class="col-lg-9 col-12">
						<div class="menu-area">
								<!-- Main Menu -->
								
								<nav class="navbar navbar-expand-lg">
								<div class="navbar-collapse">	
								<div class="nav-inner ">	

											<ul class="nav main-menu menu navbar-nav ">
													<li class="active text-center"><a href="#">--   My Cart   --</a></li>
													<div class=cart1><b>My Cart(<?php echo $_SESSION["count"] ?>)</div>
													<div class="empty" align=right ><a href="emptybasket.php">Empty basket<i class="fa fa-shopping-cart" aria-hidden="true" style="font-size: 25px;"></i></a></div>
													
												</ul>
										</div>
									</div>
								</nav>
								<!--/ End Main Menu -->									
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/ End Header Inner -->
</header>

<!-- <Start table> -->
<div class="container-fluid">
  <div class="mb-3 mt-3">
<hr color="grey">

    <?php
    $servername="localhost";
    $uname="root";
    $password="";
    $dbname="zshop";
    $cn=new mysqli($servername,$uname,$password,$dbname);
    if($cn->connect_error)
    {
        die ("connection failed".connect_error);
    }
    
    $noofitems=sizeof($_SESSION["cart"]);
   
    echo "<table border=0 align='center' style='border-collapse: collapse;'>";
    echo "<tr style='border: 2px solid grey;'><th>Product Images</th><th>Item Description</th><th>Unit Price</th><th>Quantity</th><th>Total</th></tr>";
$t=0;
    for ($i=0;$i<$noofitems;$i++) 
    {
        $x=$_SESSION["cart"][$i];
    $q="select * from clothing where pid=$x";
    $result=$cn->query($q);
    $row=$result->fetch_assoc();
    $a=$row["pname"];
    $b=$row["pqty"];
    $c=$row["pprice"];
    $dd=$row["pimage"];
	$t=$t+$c;
    $sno=$i+1;
	$name_quantity='t'.$i;
	$unit_price='up'.$i;
	$name_total='total'.$i;
    
     echo "<tr style='border: 2px solid grey;'><th><img src='$dd' width=90 height=90></th><th id='th1'>$a</th><th>$ <span id='$unit_price'>$c</th><th><input type=number max=5 min=1 value='1' id='$name_quantity' onchange='calculatetotal($i)'></th><th>$ <span id='$name_total'>$c</span></th></tr>";
        
    }
echo "<tr style='border: 2px solid grey;'><th colspan=4 align=center class='total1'>Total Amount</th><th><span id='grosstotal' class='total'>$ $t</span></th></tr>";
    echo "</table>";
    echo "<input type=hidden value=$noofitems id=noofitems>"
    
        ?>
        <br>
        <br>
        <hr color="grey">
        <div id="div1" align=center>
        <a href="index.php"><input type="submit" value="Close" id="btn2"></a>&nbsp&nbsp
		<input type="submit" value="Cash-On Delivery" id="btn3" onclick="myFunction()">
      
    </div>
    <script>
function myFunction() {
  alert("Your Orderplaced sucessfully");
}
</script>
</div></div>
<!-- <end table> -->

   
 
	<!-- Jquery -->
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.0.js"></script>
	<script src="js/jquery-ui.min.js"></script>
	<!-- Popper JS -->
	<script src="js/popper.min.js"></script>
	<!-- Bootstrap JS -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Color JS -->
	<script src="js/colors.js"></script>
	<!-- Slicknav JS -->
	<script src="js/slicknav.min.js"></script>
	<!-- Owl Carousel JS -->
	<script src="js/owl-carousel.js"></script>
	<!-- Magnific Popup JS -->
	<script src="js/magnific-popup.js"></script>
	<!-- Waypoints JS -->
	<script src="js/waypoints.min.js"></script>
	<!-- Countdown JS -->
	<script src="js/finalcountdown.min.js"></script>
	<!-- Nice Select JS -->
	<script src="js/nicesellect.js"></script>
	<!-- Flex Slider JS -->
	<script src="js/flex-slider.js"></script>
	<!-- ScrollUp JS -->
	<script src="js/scrollup.js"></script>
	<!-- Onepage Nav JS -->
	<script src="js/onepage-nav.min.js"></script>
	<!-- Easing JS -->
	<script src="js/easing.js"></script>
	<!-- Active JS -->
	<script src="js/active.js"></script>
</body>
</html>