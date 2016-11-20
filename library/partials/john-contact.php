<?php
/*
John's Contact Form
*/
?>

<h3>What's Your Cheese?</h3>

<form name="contactform" method="post" action="send_form_email.php">
	<label for="first_name">First Name</label>
	<input type="text" name="first_name" placeholder="First Name" required="required">
	<label for="last_name">Last Name</label>
	<input type="text" name="last_name" placeholder="Last Name" required="required">
	<label for="email">Email Address</label>
	<input type="email" name="email" placeholder="Email Address" required="required">
	<label for="comments">Tell us about yourself?</label>
	<textarea name="comments" placeholder="What's going on?"></textarea>
	<label>Subscribe to our Newsletter!</label>
	<radio></radio>

    <input type="hidden" name="retURL" value="<?php echo get_home_url();?>">
    
	<input name="submit" type="submit" value="submit"
		img src="<?php echo get_template_directory_uri();?>/library/images/sky-button.svg" alt="Let's Get Started!">

</form>

<?php
/*
End
*/
?>