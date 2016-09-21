<!-- Full header functionality is included for the user. -->
<?php
	include("headerCore.php");
?>
				
<!-- Content body -->	
<div class="mainContent" id="wrap">

	<!-- Form which prompts user for their suggestion of a new event, via text boxes -->
	<form method="post" action="http://webdevbasics.net/scripts/demo.php" name="EventForm" id="EventForm" onsubmit="return validateEventForm()">
		<fieldset>
			<legend>Suggest an event!</legend>				
				<label for="eventTitle"> Title:</label>					
				<input type="text" name="eventTitle" id="eventTitle" required>
			<br>			
				<label for="startYear"> Start Time? ( YYYY </label>/<label for="startMonth"> MM</label>/<label for="startDay"> DD )</label>
				<!-- Forwardslash in code provide visual when entering the date #### / ## / ## -->
				<input type="text" name="startDate" id="startYear" maxlength="4" required>	 /
				<input type="text" name="startDate" id="startMonth" maxlength="2" required>        /
				<input type="text" name="startDate" id="startDay" maxlength="2" required>    	  
			<br>				
				<label for="endYear"> End Time? ( YYYY </label>/<label for="endMonth"> MM</label>/<label for="endDay"> DD )</label>
				<!-- Forwardslash in code provide visual when entering the date #### / ## / ## -->
				<input type="text" name="endDate" id="endYear" maxlength="4" required>		/
				<input type="text" name="endDate" id="endMonth" maxlength="2" required>   		  /
				<input type="text" name="endDate" id="endDay" maxlength="2" required>    	  
			<br>				
				<label for="eventDescription"> Description of Event and its Location:</label>
			<br>
				<textarea class="form-control" rows="15" name="eventDescription" id="eventDescription" required></textarea>
			<br>
			<input type="submit" value="Submit" class="btn btn-primary submitButton">			
		</fieldset>
	</form>
</div>
	
<!-- The game footer is to be presented across all game screens and contains our group's signature. -->
<?php
	include("footer.php");
?>