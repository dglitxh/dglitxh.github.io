<?php

    // Get the form fields, removes html tags and whitespace.
    $name = strip_tags(trim($_POST["name"]));
    $name = str_replace(array("\r","\n"),array(" "," "),$name);
    $phone = trim($_POST["phone"]);
    $message = trim($_POST["message"]);

    // Check the data.
     (null($name) OR null($message) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location:https://https://dglitxh.github.io/success=1");
        exit;
    }

    // Set the recipient email address. Update this to YOUR desired email address.
    $recipient = "ydglitch@gmail.com";

    // Set the email subject.
    $subject = "New contact from $name";

    // Build the email content.
    $email_content = "Name: $name\n";
    $phone_content .= "Phone: $phone\n";
    $email_content .= "Message:\n$message\n";

    // Build the email headers.
    $email_headers = "From: $name <$email>";

    // Send the email.
    mail($recipient, $subject, $email_content, $email_headers);
    
    // Redirect to the index.html page with success code
    header("Location:https://https://dglitxh.github.io/?success=-1");

?>
