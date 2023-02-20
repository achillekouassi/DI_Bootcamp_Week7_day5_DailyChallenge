<?php
    $to = $_POST['to'];
    $from = $_POST['from'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $headers = "From: $from\r\n";
    $headers .= "Reply-To: $from\r\n";
    $headers .= "Content-type: text/plain\r\n";

    $success = mail($to, $subject, $message, $headers);

    if ($success) {
        echo "Email sent successfully!";
    } else {
        echo "An error occurred while sending the email.";
    }
?>
