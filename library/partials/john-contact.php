<?php
/*
John's Contact Form
*/
?>

<?php

if(isset($_POST['submit'])) {
    
    $email_to = "jwelch0015@gmail.com";
    $email_subject = "Contact Form Submission from Skymse.com";


function died($error) {
    echo "Please fill out all the fields";
    die();
}

if(!isset($_POST['first_name']) ||
   !isset($_POST['last_name'])  ||
   !isset($_POST['email'])      ||
   !isset($_POST['comments'])   ||
   died('We are sorry, but there appears to be a problem with the form you submitted.')
  );
    
    $first_name = $_POST['first_name'];
    $first_name = $_POST['last_name'];
    $first_name = $_POST['email'];
    $first_name = $_POST['comments'];

    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'The email address you entered does not appear to be valid. <br />';
}

    $string_exp = "/^[A-Za-z .'-]+$/";
    if(!preg_match($string_exp,$first_name)) {
        $error_message .= 'The first name you entered does not appear to be valid.<br />';
    }

if(!preg_match($string_exp,$last_name)) {
    $error_message .= 'The last name you entered does not appear to be valid.<br />';
}

if(strlen($comments) <2) {
    $error_message .= 'Your comments do not meet the required length.<br />';
}

if(strlen($error_message) > 0) {
  died(error_message);  
}

    $email_message = "Form details below. \n\n";

    function clean_string($string) {
        $bad = array("content-type","bcc:","to","cc:","href");
        return str_replace($bad,"",$string);
    }


    $email_message .= "First Name: ".clean_string($first_name)."\n";
    $email_message .= "Last Name: ".clean_string($last_name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Comments: ".clean_string($comments)."\n";


$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n".
'X-Mailer: PHP/'. phpversion();
@mail($email_to, $email_subject, $email_message, $headers);

?>

<p>Thanks for reaching out! We'll get back to you as soon as we can. </p>

<?php

}

?>


<h3>What's Your Cheese?</h3>

<form name="contactform" role="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
	<label for="first_name">First Name</label>
	<input type="text" name="first_name" placeholder="First Name" required="required">
	<label for="last_name">Last Name</label>
	<input type="text" name="last_name" placeholder="Last Name" required="required">
	<label for="email">Email Address</label>
	<input type="email" name="email" placeholder="Email Address" required="required">
	<label for="comments">Tell us about yourself?</label>
	<textarea name="comments" placeholder="What's going on?"></textarea>
	<label>Subscribe to our Newsletter!</label>

	<input name="submit" type="submit" value="submit" alt="Let's Get Started!">

</form>

<?php
/*
End
*/
?>