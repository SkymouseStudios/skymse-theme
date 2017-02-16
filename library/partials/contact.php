<?php

  //response generation function

  $response = "";

  //function to generate response
  function my_contact_form_generate_response($type, $message){

    global $response;

    if($type == "success") $response = "<div class='success'>{$message}</div>";
    else $response = "<div class='error'>{$message}</div>";

  }

  //response messages
  $not_human       = "Human verification incorrect.";
  $missing_content = "Please supply all information.";
  $email_invalid   = "Email Address Invalid.";
  $message_unsent  = "Message was not sent. Try Again.";
  $message_sent    = "Thanks! Your message has been sent.";

  //user posted variables
  $name = $_POST['message_name'];
  $email = $_POST['message_email'];
  $message = $_POST['message_text'];
  $human = $_POST['message_human'];

  //php mailer variables
  $to = get_option('admin_email');
  $subject = "Someone sent a message from ".get_bloginfo('name');
  $headers = 'From: '. $email . "\r\n" .
    'Reply-To: ' . $email . "\r\n";

  if(!$human == 0){
    if($human != 2) my_contact_form_generate_response("error", $not_human); //not human!
    else {

      //validate email
      if(!filter_var($email, FILTER_VALIDATE_EMAIL))
        my_contact_form_generate_response("error", $email_invalid);
      else //email is valid
      {
        //validate presence of name and message
        if(empty($name) || empty($message)){
          my_contact_form_generate_response("error", $missing_content);
        }
        else //ready to go!
        {
          $sent = wp_mail($to, $subject, strip_tags($message), $headers);
          if($sent) my_contact_form_generate_response("success", $message_sent); //message sent!
          else my_contact_form_generate_response("error", $message_unsent); //message wasn't sent
        }
      }
    }
  }
  else if ($_POST['submitted']) my_contact_form_generate_response("error", $missing_content);

?>

<div id="respond">
  <?php echo $response; ?>
  <form action="<?php the_permalink(); ?>#respond" method="post">

    <label for="name">What's Your Name? <span>*</span> <br>
    <input type="text" name="message_name" value="<?php echo esc_attr($_POST['message_name']); ?>"></label>
   <label for="message_email">Email: <span>*</span> <br>
    <input type="text" name="message_email" value="<?php echo esc_attr($_POST['message_email']); ?>">
    </label>

    <label for="message_text">What do you want to do? <span>*</span> <br>
    <textarea type="text" name="message_text"><?php echo esc_textarea($_POST['message_text']); ?>
    </textarea></label>
    
    <label for="message_human">Human Verification: <span>*</span> <br>
    <input type="text" style="width: 60px;" name="message_human"> + 3 = 5</label>

    <input type="hidden" name="submitted" value="1">

   <input type="submit">

  </form>
</div>




