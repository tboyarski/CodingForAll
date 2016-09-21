<!-- Full header functionality is included for the user. -->
<?php
	include("headerCore.php");
?>
	
<!-- Content body -->	
<div class="mainContent" id="wrap">		
	<h1 id="specialH1">About the Club </h1>
	<form class="buttonLinks" action="contactUs.php">
		<input type="submit" class="btn btn-primary submitButton" value="Talk To Us">		
	</form>
	<form class="buttonLinks" action="alumni.php">
		<input type="submit" class="btn btn-primary submitButton" value="Alumni">			
	</form>

	<p>
		Nadia founded the club on October 8th, 2015 with the premise of promoting coding amongst women. Women are greatly outnumbered in the CST 
		program and Nadia wanted to provide an environment in which peers could gather to learn. Those who are able share their knowledge on
		concepts and ideas. Nadia wanted to create a smaller stage in which individuals could practice at before taking on larger or more intimidating
		audiences. Articles <a href="http://commons.bcit.ca/broadcastnews/2015/10/08/coding-for-all-club-lauched-at-bcit/" class="resources">here</a> and 
		<a href="http://commons.bcit.ca/update/2015/11/coding-for-all-2/" class="resources">here</a> by BCIT News documents the opening of the club.
	</p>

	<div class="imageContainer">
		<div class="imageFrame"><img src="Images/Git-Tutorial-300x300.jpg" alt="Picture of Git-Tutorial event"></div>
		<div class="imageFrame"><img src="Images/Coding-for-All-300x300.jpg" alt="Picture of Coding for All meeting around computers"></div>
		<div class="imageFrame"><img src="Images/Presenters-300x300.jpg" alt="Students practicing presenting in front of their peers"></div>
		<p class="imageSubscript"> Coding For All Meeting photos taken by club founder Nadia Dobrianskaia's personal <a class="resources" href="http://commons.bcit.ca/update/author/ndobrianskaia/">BCIT student blog.</a>  </p>
	</div>
</div>	
	
<!-- The game footer is to be presented across all game screens and contains our group's signature. -->
<?php
	include("footer.php");
?>