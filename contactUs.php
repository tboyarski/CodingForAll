<!-- Full header functionality is included for the user. -->
<?php
	include("headerCore.php");
?>
	
<!-- Content body -->	
<div class="mainContent" id="wrap">

	<!-- Form which prompts user for their comments on the site or other suggestions, via text boxes -->
	<form method="post" action="formmail.php" name="CommentForm">
		<input type="hidden" name="env_report" value="REMOTE_HOST,REMOTE_ADDR,HTTP_USER_AGENT,AUTH_TYPE,REMOTE_USER" />
		<input type="hidden" name="recipients" value="codingforu221e@gmail.com" />
		<input type="hidden" name="subject" value="Coding4All Contact Us Response!" />
		<input type="hidden" name="good_url" value="thankYou.php" />
	
		<fieldset>
			<legend>Contact Us!</legend>
			<label for="subjectLine"> Subject: </label>
			<input type="text" class="form-control" placeholder="Subject..." name="subjectLine" id="subjectLine" required> 
		<br>
			<label for="additInfo"> Your Comments: </label>
			<textarea class="form-control" placeholder="Your Comments..." name="additInfo" id="additInfo" cols="40" rows="5" required></textarea>
		<br>
			<input type="submit" class="btn btn-primary signUpSubmit" value="Submit" />
		</fieldset>
	</form>
</div>
	
<!-- The game footer is to be presented across all game screens and contains our group's signature. -->
<?php
	include("footer.php");
?>