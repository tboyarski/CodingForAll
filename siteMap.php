<!-- Full header functionality is included for the user. -->
<?php
	include("headerCore.php");
?>
	
<!-- Content body -->	
<div class="mainContent" id="wrap">

	<!-- Title and container to hold page's contents -->
	<h1>Site Map</h1>	
	<div class="mapContainer">
	
		<!-- Unordered list to demonstrate page hierarchy of website -->
		<ul class="firstTeir">
			<li><a href="default.php" class="resources">Home</a></li>
			<li><a href="events.php" class="resources">Events</a>
			<ul class="secondTeir">
				<li><a href="newEvent.php" class="resources">New Event</a></li>
			</ul>
			</li>
			<li><a href="about.php" class="resources">About</a>
			<ul class="secondTeir">
				<li><a href="alumni.php" class="resources">Alumni</a></li>
			</ul>
			</li>	
			<li><a href="resources.php" class="resources">Resources</a></li>	
			<li><a href="contactUs.php" class="resources">Contact Us</a></li>			
			<li><a href="siteMap.php" class="resources">Site Map</a></li>				
		</ul>
	</div>
</div>

<!-- The game footer is to be presented across all game screens and contains our group's signature. -->
<?php
	include("footer.php");
?>