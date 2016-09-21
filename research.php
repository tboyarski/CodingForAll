<?php
	include "forum/functions.php";
	require_once("forum/config.php");
	session_start();
	
	// Connect to server and select database.
	mysql_connect(DB_HOST, DB_USER, DB_PASSWORD) or die ("cannot connect, error: ".mysql_error());
	mysql_select_db(DB_DATABASE)or die("cannot select DB, error: ".mysql_error());
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Coding4All | Site Map</title>
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
	<script src="MyScript.js" type="text/javascript"></script>
	
	<link rel="stylesheet" type="text/css" href="Style/base.css" media="screen">
	<link rel="stylesheet" type="text/css" href="Style/print.css" media="print">
</head>
<body>
	<div class="printDiv">
		<img class="PrintLogo" src="Images/Logo4.png" alt="Logo Image to appear when printing">
		<img class="PrintQRCode" src="Images/QRCodes/QRCodeSiteMap.png" alt="QRCode to appear when printing">
		<p class="printDir"> Current page: /Home/SiteMap </p>
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
				<a href="Index.php" class="navbar-brand"><img src="Images/LOGO.png" height="50" alt="Logo" /></a>
			</div>
			<!-- Main navigation menu providing user site navigation options. Is
					referenced by the hamburger button which appears when window 
					frame is reduced beyond specifications. Contains login modal
					which when pressed provides in-frame user login. -->
			<div class="collapse navbar-collapse" id="mainNavBar">
				<ul class="nav navbar-nav">
					<li><a href="Index.php">Home</a></li>
					<li><a href="Forum.php">Forum</a></li>
					<li><a href="Events.php">Events</a></li>
					<li><a href="About.php">About</a></li>
					<li class="activeSelection"><a href="Resources.php">Resources</a></li>	
				</ul>
				
				<!-- **Login Modal Start** -->				
				<ul class="nav navbar-nav navbar-right">
					<!-- Open login modal with button press -->
					<li>
							<?php
								if (isLoggedIn()){		
									echo '<a class="userName">Hello, '.$_SESSION['SESS_FIRST_NAME'].'</a>';
								} else {
									echo '';
								}
							?>
					</li>					
					<li>
							<?php
								if (isLoggedIn()){
									echo '<a href="forum/logout.php">Logout</a>';
								} else {
									echo '<a href="forum/login_form.php" data-toggle="modal" data-target="#myModal">Login</a>';
								}
							?>
					</li>
				</ul>
				<!-- Modal core -->
				<div id="myModal" class="modal fade" role="dialog">
					<div class="modal-dialog">
						<!-- Modal content - See "forum/login_form.php" -->
						<div class="modal-content">						
						</div>
					</div>
				</div>
				<!-- **Login Modal End** -->
			</div>	
		</div>
	</nav>
	
	<!-- Content body -->	
	<div class="mainContent" id="wrap">
	
		<!-- Title and container to hold page's contents -->
		<h1>Research List</h1>	
		<div class="mapContainer">
		
			<!-- Unordered list template 
				<li><class="resources"></li>
				<ul class="secondTeir">
					<li><a href="PDF/.pdf" class="resources">PDF</a></li>
					<li><a href="Review/.docx" class="resources">Word Doc Review</a></li>					
				</ul>				
			-->
			<!-- Unordered list to demonstrate page hierarchy of website -->
			<ul class="firstTeir">
				<li><class="resources"><a href="Review/Mirela - Document Gather and Review.docx" class="resources">APA List</a></li>			
				<li><class="resources"><a href="Review/Mirela - Review Template.docx" class="resources">Review Template</a></li>	

				<li><class="resources">Hill, C., Corbett, C., & St Rose, A. (2010). Why so few? Women in Science, Technology, Engineering, and Mathematics. American Association of University Women. 1111 Sixteenth Street NW, Washington, DC 20036.</li>
				<ul class="secondTeir">
					<li><a href="PDF/Hill 2010 - Why So Few Women in Science Technology Engineering and Mathematics.pdf" class="resources">PDF</a></li>
					<li><a href="Review/Mirela -  Citation and Why - CHP 1-5.docx" class="resources">CH1-CH5: Cite and Why?</a></li>						
					<li><a href="Review/Mirela - Literature CH1 Review.docx" class="resources">Literature CH1 Review</a></li>						
					<li><a href="Review/Mirela - Literature CH2 Review.docx" class="resources">Literature CH2 Review</a></li>						
					<li><a href="Review/Mirela - Literature CH3 Review.docx" class="resources">Literature CH3 Review</a></li>						
					<li><a href="Review/Mirela - Literature CH4 Review.docx" class="resources">Literature CH4 Review</a></li>						
					<li><a href="Review/Mirela - Literature CH5 Review.docx" class="resources">Literature CH5 Review</a></li>						
					<li><a href="" class="resources">Literature CH Review6 - Awaiting File</a></li>						
					<li><a href="" class="resources">Literature CH Review7 - Awaiting File</a></li>						
					<li><a href="" class="resources">Literature CH Review8 - Awaiting File</a></li>						
					<li><a href="" class="resources">Literature CH Review9 - Awaiting File</a></li>						
					<li><a href="" class="resources">Literature CH Review10 - Awaiting File</a></li>					
				</ul>	

				<li><class="resources">Shapiro, J. R., & Williams, A. M. (2012). The role of stereotype threats in undermining girls’ and women’s performance and interest in STEM fields. Sex Roles, 66(3-4), 175-183.</li>
				<ul class="secondTeir">
					<li><a href="PDF/Shapiro 2011 - The Role of Stereotype Threats in Undermining Girls.pdf" class="resources">PDF</a></li>
					<li><a href="Review/.docx" class="resources">Awaiting File</a></li>					
				</ul>	
				
				<li><class="resources">Cho, S., Goodman, M., Oppenheimer, B., Codling, J., & Robinson, T. (2015). Images of women in STEM fields. The public, 1, 10.</li>
				<ul class="secondTeir">
					<li><a href="PDF/Cho 2009 - Image of women in STEM.pdf" class="resources">PDF</a></li>					
				</ul>					
				<li><class="resources">Miller, D. I., & Wai, J. (2015). The bachelor’s to Ph. D. STEM pipeline no longer leaks more women than men: a 30-year analysis. Frontiers in psychology, 6.</li>
				<ul class="secondTeir">
					<li><a href="PDF/Miller 2015 - The bachelor’s to Ph.D. STEM pipeline no longer leaks morewomen than men a 30-year analysis.pdf" class="resources">PDF</a></li>					
				</ul>		
				<li><class="resources">Cheryan, S., Plaut, V. C., Handron, C., & Hudson, L. (2013). The stereotypical computer scientist: Gendered media representations as a barrier to inclusion for women. Sex roles, 69(1-2), 58-71.</li>
				<ul class="secondTeir">
					<li><a href="PDF/Cheryan 2013 - The Stereotypical Computer Scientist Gendered Media Representations as a Barrier to Inclusion for Women.pdf" class="resources">PDF</a></li>					
				</ul>	
				<li><class="resources">Gaspard, H., Dicke, A. L., Flunger, B., Schreier, B., Häfner, I., Trautwein, U., & Nagengast, B. (2015). More value through greater differentiation: Gender differences in value beliefs about math. Journal of Educational Psychology, 107(3), 663.</li>
				<ul class="secondTeir">
					<li><a href="PDF/Gaspard 2015 - Promoting Value Beliefs in Mathematics" class="resources">PDF</a></li>					
				</ul>					
				<li><class="resources">Harackiewicz, J. M., Rozek, C. S., Hulleman, C. S., & Hyde, J. S. (2012). Helping parents to motivate adolescents in mathematics and science an experimental test of a utility-value intervention. Psychological Science, 0956797611435530.</li>
				<ul class="secondTeir">
					<li><a href="PDF/Harackiewicz 2012 - Helping Parents to Motivate Adolescents in Mathematics and Science An Experimental Test of a Utility-Value Intervention.pdf" class="resources">PDF</a></li>
					<li><a href="Review/Mirela - Helping Parents Motivate Adolescents.docx" class="resources">Word Doc Review</a></li>					
				</ul>
				<li><class="resources">Lazarides, R., Rubach, C., & Ittel, A. (2016). Motivational profiles in mathematics: What role do gender, age and parents’ valuing of mathematics play?. International Journal of Gender, Science and Technology, 8(1), 124-143.</li>
				<ul class="secondTeir">
					<li><a href="PDF/Lazarides 2016 - Motivational Profiles in Mathematics What Roles Do Gender, Age, and Parents Valuing of Mathematics Play.pdf" class="resources">PDF</a></li>
					<li><a href="Review/Mirela - Motivational Profiles in Mathematics.docx" class="resources">Word Doc Review</a></li>					
				</ul>	
				<li><class="resources">Robnett, R. (2015). Girls’ and Women’s Preferred Methods of Coping with Gender Bias in STEM. International Journal of Gender, Science and Technology, 8(1), 19-37.</li>
				<ul class="secondTeir">
					<li><a href="PDF/Robnett 2015 - Girls’ and Women’s Preferred Methods of Coping with Gender Bias in STEM.pdf" class="resources">PDF</a></li>
					<li><a href="Review/Mirela - Girls’ and Women’s Preferred Methods of Coping.docx" class="resources">Word Doc Review</a></li>					
				</ul>
				<li><class="resources">Wigfield, A., & Eccles, J. S. (2000). Expectancy–value theory of achievement motivation. Contemporary educational psychology, 25(1), 68-81.</li>
				<ul class="secondTeir">
					<li><a href="PDF/Wigfield 2000 - Expectancy–value theory of achievement motivation.pdf" class="resources">PDF</a></li>
					<li><a href="Review/Mirela - EVT.docx" class="resources">Word Doc Review</a></li>					
				</ul>	
				<li><class="resources">Watt, H. M., Shapka, J. D., Morris, Z. A., Durik, A. M., Keating, D. P., & Eccles, J. S. (2012). Gendered motivational processes affecting high school mathematics participation, educational aspirations, and career plans: A comparison of samples from Australia, Canada, and the United States. Developmental psychology, 48(6), 1594.</li>
				<ul class="secondTeir">
					<li><a href="PDF/Watt 2012 - Gendered Motivational Processes Affecting High School.pdf" class="resources">PDF</a></li>
					<li><a href="Review/Mirela - Gendered Motivational Processess Affecting High School.docx" class="resources">Word Doc Review</a></li>					
				</ul>	
				<li><class="resources">Survey Questions: Tim</li>
				<ul class="secondTeir">
					<li><a href="Review/PilotQuestions.xlsx" class="resources">XLSX Document</a></li>					
				</ul>
				<li><class="resources">Survey Questions: Tim Template</li>
				<ul class="secondTeir">
					<li><a href="Review/PilotQuestions - Template.xlsx" class="resources">XLSX Template</a></li>					
				</ul>				
			</ul>
		</div>
	</div>
	
	<!-- Page footer -->
	<div class="footer">
		<div class="footerCont">
		<ul class="listFooter">
			<li class="button"><a class="button" href="http://www.facebook.com"><img src="Images/FB-f-Logo__white_50.png" width="32" alt="Facebook Icon"></a></li>
			<li class="button"><a class="button" href="http://www.twitter.com"><img src="Images/Twitter_logo_white.png" width="32" alt="Twitter Icon"></a></li>
			<li><a href="ContactUs.php">Contact Us</a></li>
			<li><a href="SiteMap.php">Site Map</a></li>
		</ul>
		</div>
	</div>
</body>
</html>