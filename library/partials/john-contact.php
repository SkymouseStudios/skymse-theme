<?php
/*
John's Contact Form
*/
?>

<h3>What's Your Cheese?</h3>

<form>
	<label>First Name</label>
	<input type="text" name="First Name" placeholder="First Name" required="required">
	<label>Last Name</label>
	<input type="text" name="Last Name" placeholder="Last Name" required="required">
	<label>Email Address</label>
	<input type="email" name="Email Address" placeholder="Email Address" required="required">
	<label>Tell us about yourself?</label>
	<textarea name="Your Message Here" placeholder="What's going on?"></textarea>
	<label>Subscribe to our Newsletter!</label>
	<radio></radio>

	<button name="submit" type="submit" value="submit">
		<img src="<?php echo get_template_directory_uri();?>/library/images/sky-button.svg" alt="Let's Get Started!">
	</button>

</form>

<?php
/*
End
*/
?>