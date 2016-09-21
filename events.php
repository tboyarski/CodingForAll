<!-- Full header functionality is included for the user. -->
<?php
	include("headerCore.php");
?>
	
<!-- Content body -->
<div class="mainContent" id="wrap">
	<div>		
		<h1 id="specialH1">Events/Calendar</h1>
		<form class="buttonLinks" action="NewEvent.php">
			<input type="submit" class="btn btn-primary submitButton" value="Suggest Event">		
		</form>
		<p>
			Here you will find Coding for All's events calendar, updated constantly.
			Previously, we meet most Wednesdays at 2:30pm, to discuss various computing 
			related topics. We also connect with other BCIT events as well as external events
			which we feel would be beneficial or interesting to our members.
			Check back often to learn about upcoming events, and please feel free to suggest
			any relevant events you've heard about so we can add them to our calendar!
			We hope to host twice as many meetings this year!
		</p>
		<noscript>
					<h2>&nbsp;&nbsp; Google Calendar Only Visible with JavaScript.</h2>
		</noscript>
		
		
	</div>
	
	<!-- Google calendar which will be used to track and promote events related to
			the group. Will be publically viewable but privately accessible. -->
	<div class="calendar">
		<!-- PLACEHOLDER -->
		<iframe src="https://calendar.google.com/calendar/embed?src=i2070k3402f6608rmbcqft9bf4%40group.calendar.google.com&ctz=America/Vancouver"></iframe>
	</div>
</div>
	
<!-- The game footer is to be presented across all game screens and contains our group's signature. -->
<?php
	include("footer.php");
?>