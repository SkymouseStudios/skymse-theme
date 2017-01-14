<!-- Convert the contact form into a PHP Partial that is retrieved -->
<!-- Are we using this still? -->

<h3>Got a Project?</h3>

<form role="form" action="#proposal" method="post">

	<p>We can help. Fill out this quick form. It’s like ad-libs but it actually gets you places.</p>

	<label for="first_name">Name (n.)</label>
	<input type="text" name="name" placeholder="Hey what’s your name? (n.)" value="<?php echo htmlspecialchars($_POST['first_name']); ?>" required="required">

	<label for="email">Email Address (n.)</label>
	<input type="email" name="email" placeholder="Best way to reach you?" value="<?php echo htmlspecialchars($_POST['email']); ?>" required="required">

	<label for="job">What do you do? (n.)</label>
	<input type="text" name="job" placeholder="What do you do?" value="<?php echo htmlspecialchars($_POST['job']); ?>" required="required">

	<label for="important">What is important to you? (n.)</label>
	<input type="text" name="important" placeholder="Hey what’s your name? (n.)" value="<?php echo htmlspecialchars($_POST['first_name']); ?>" required="required">

	<label for="Feelings">How do you feel about your company? (Adj.)</label>
	<select name="Feelings">
  		<option value="Proud">Proud</option>
  		<option value="Uneasy">Uneasy</option>
  		<option value="Embarrassed">Embarrassed</option>
  		<option value="Confused">Confused</option>
	</select>

	<label for="Feelings">Time constraints? Urgency? (Adj.)</label>
	<select name="Feelings">
  		<option value="Not too bad">Not too bad</option>
  		<option value="We shouldn’t dawdle">We shouldn’t dawdle</option>
  		<option value="Pending Doom">Pending Doom</option>
  		<option value="Panic Mode">Panic Mode</option>
	</select>

	<label for="message"><?php echo htmlspecialchars($_POST['message']);?>Vent here: (we won’t read it out loud)</label>
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

		<?php
		if(isset($_POST['size'])) {
		  echo "selected size: ".htmlspecialchars($_POST['job']);
		}
		?>
 
// If there are no errors, send the email
if (!$errName && !$errEmail && !$errMessage ) {
	if (wp_mail ($to, $subject, $body, $from)) {
		$result='<div class="alert alert-success">We cannot wait to meet you.</div>';
	} else {
		$result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later, or email us at <a href="mailto:hullo@skymse.com">hullo@skymse.com</a></div>';
	}
}

	}
?>








