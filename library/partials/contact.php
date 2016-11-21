<!-- Convert the contact form into a PHP Partial that is retrieved -->
<!-- Are we using this still? -->

<h3>What's Your Cheese?</h3>

<form role="form" action="#proposal" method="post">

	<label for="first_name">First Name</label>
	<input type="text" name="first_name" placeholder="First Name" value="<?php echo htmlspecialchars($_POST['first_name']); ?>" required="required">

	<label for="last_name">Last Name</label>
	<input type="text" name="last_name" placeholder="Last Name" value="<?php echo htmlspecialchars($_POST['last_name']); ?>" required="required">

	<label for="email">Email Address</label>
	<input type="email" name="email" placeholder="Email Address" value="<?php echo htmlspecialchars($_POST['email']); ?>" required="required">

	<label for="message"><?php echo htmlspecialchars($_POST['message']);?>Tell us about yourself?</label>
	<textarea name="message" placeholder="What's going on?"></textarea>

	<label>Subscribe to our Newsletter!</label>


	<input name="submit" type="submit" alt="Let's Get Started!">

	<?php echo $result; ?>	

</form>


<?php
	if (isset($_POST["submit"])) {
		$last_name = $_POST['last_name'];
		$first_name = $_POST['first_name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		$from = 'Skymse Contact Form'; 
		$to = 'phanus23@gmail.com'; 
		$subject = 'Message from skymse.com';
		
		$body = "From: $first_name\n E-Mail: $email\n Message:\n $message";
 
		// Check if name has been entered
		if (!$_POST['name']) {
			$errName = 'Please enter your name';
		}
		
		// Check if email has been entered and is valid
		if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$errEmail = 'Please enter a valid email address';
		}
		
		//Check if message has been entered
		if (!$_POST['message']) {
			$errMessage = 'Please enter your message';
		}
 
// If there are no errors, send the email
if (!$errName && !$errEmail && !$errMessage ) {
	if (mail ($to, $subject, $body, $from)) {
		$result='<div class="alert alert-success">We cannot wait to meet you.</div>';
	} else {
		$result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later, or email us at <a href="mailto:hullo@skymse.com">hullo@skymse.com</a></div>';
	}
}
	}
?>








