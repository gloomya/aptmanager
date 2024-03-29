<?php
session_start();
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        // Replace this email with recipient email
        $mail_to = "gloomya@gmail.com";
        
        // Sender Data
        $subject = trim($_POST["subject"]);
        $name = str_replace(array("\r","\n"),array(" "," ") , strip_tags(trim($_POST["name"])));
        $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
        $message = trim($_POST["message"]);
        
        if ( empty($name) OR !filter_var($email, FILTER_VALIDATE_EMAIL) OR empty($subject) OR empty($message)) {
            // Set a 400 (bad request) response code and exit.
            http_response_code(400);
            $_SESSION['contactErr'] = "Please complete the form and try again.";
            header("Location: support.php");
        }
        
        // Mail Content
        $content = "Name: $name\n";
        $content .= "Email: $email\n\n";
        $content .= "Message:\n$message\n";

        // email headers.
        $headers = "From: $name <$email>";

        // Send the email.
        $success = mail($mail_to, $subject, $content, $headers);
        if ($success) {
            // Set a 200 (okay) response code.
            http_response_code(200);
            $_SESSION['contactDone'] = "Thank You! Your message has been sent.";
        } else {
            // Set a 500 (internal server error) response code.
            http_response_code(500);
            $_SESSION['contactErr'] = "Oops! Something went wrong, we couldn't send your message.";
        }

    } else {
        // Not a POST request, set a 403 (forbidden) response code.
        http_response_code(403);
        $_SESSION['contactErr'] = "There was a problem with your submission, please try again.";
    }
    header("Location: support.php");
?>
