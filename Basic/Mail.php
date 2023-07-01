<!DOCTYPE html>
<html>
<head>
    <title>Email Sender</title>
</head>
<body>

<h2>Send Email</h2>

<form method="post" action="">
    <label for="email">Email:</label>
    <input type="email" name="email" id="email" required>
    <br><br>
    <input type="submit" value="Send Email">
</form>

<?php
//requires tinkering with mercury mail server by XMAPP to run correctly
//Sends a sample email to the user from a given sender email.
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST['email'];

        // Ensuring the email is not empty and is a valid email address
        if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // Email details
            $to = $email;
            $subject = "Test Email";
            $message = "This is a test email sent from a PHP script.";
            $headers = 'From: arjun.krishnan0033@gmail.com' . "\r\n" .
                'Reply-To: webmaster@example.com' . "\r\n" .
                'X-Mailer: PHP/' . phpversion();

            // Send email
            if(mail($to, $subject, $message, $headers)) {
                echo "<p>Email sent successfully to $email</p>";
            } else {
                echo "<p>Failed to send email. Please check your PHP mail configuration.</p>";
            }
        } else {
            echo "<p>Please enter a valid email address.</p>";
        }
    }
?>

</body>
</html>
