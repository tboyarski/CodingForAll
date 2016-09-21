<!-- All user accessible screens will load this file. It contains 
	the basic language to establish a conntection to the SQL database,
	this is done in  PHP. In the head are included the JQuery and CSS 
	related external files which are utilized with high frequency. -->
	
<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
	
	$filename = "counter.txt";
	$number = file_get_contents($filename); 
	$file = fopen($filename, 'a'); 
	if (flock($file, LOCK_EX)) { 
		ftruncate($file, 0);
		fwrite($file, $number+1); 
		flock($file, LOCK_UN); 
	} 
	fclose($file);	
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Coding4All | Index</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    
	<!-- Bootstrap -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	
	<link rel="stylesheet" type="text/css" href="Style/base.css" media="screen">
	<link rel="stylesheet" type="text/css" href="Style/print.css" media="print">
</head>
<body>
	<div class="printDiv">
		<img class="PrintLogo" src="Images/Logo4.png" alt="Logo Image to appear when printing">
		<img class="PrintQRCode" src="Images/QRCodes/QRCodeIndex.png" alt="QRCode to appear when printing">
	</div>

	<!-- Navigation bar across the top of the page. Modular becuase when user
			clicks login button on top right; an in-frame window appears asking
			user for login and password information. -->	
	<nav class="navbar navbar-default">
		<div class="container-fliud">
		
			<!-- Hamburger button when window frame reduced beyond specifications.
					Links to the mainNavBar to provide user vertical navigation bar. -->		
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mainNavBar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="default.php" class="navbar-brand"><img src="Images/LOGO.png" width="142" alt="Logo" /></a>
			</div>
			<!-- Main navigation menu providing user site navigation options. Is
					referenced by the hamburger button which appears when window 
					frame is reduced beyond specifications. Contains login modal
					which when pressed provides in-frame user login. -->
			<div class="collapse navbar-collapse" id="mainNavBar">
				<ul class="nav navbar-nav">
					<li><a href="default.php">Home</a></li>
					<li><a href="events.php">Events</a></li>
					<li><a href="about.php">About</a></li>
					<li><a href="resources.php">Resources</a></li>	
				</ul>			
			</div>	
		</div>
	</nav>