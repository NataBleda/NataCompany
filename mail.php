<?php

// Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Required files
require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

// Check if the form has been submitted
if (isset($_POST["send"])) {

  // Create a new PHPMailer instance, passing `true` enables exceptions
  $mail = new PHPMailer(true);

  try {
    // Server settings
    $mail->isSMTP();                              // Send using SMTP
    $mail->Host       = 'smtp.gmail.com' ;      // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                     // Enable SMTP authentication
    $mail->Username   = 'mehdialaoui1234raja@gmail.com';   // SMTP username (your email address)
    $mail->Password   = 'rnsu gzfz mqtq pfxp';         // SMTP password
    $mail->SMTPSecure = 'tls';                   // Enable implicit SSL encryption
    $mail->Port       = 587;                     // SMTP port for SSL

    // Recipients
    $mail->setFrom($_POST["email"], $_POST["name"]);   // Sender's email and name
    $mail->addAddress('mehdialaoui1234raja@gmail.com'); // Recipient's email
    $mail->addReplyTo($_POST["email"], $_POST["name"]); // Reply-to sender's email

    // Content
    $mail->isHTML(true);               // Set email format to HTML
    $mail->Subject = $_POST["subject"]; // Email subject
    $mail->Body    = $_POST["message"]; // Email message
    /*$imagePath = 'C:\xampp\htdocs\soutenance-decembre\NataCompany\natimage\fuck.jpg';
    $image =file_get_contents($imagePath);
    $mail->addAttachment($image ,'image.jpg', 'base64', 'image/jpeg', 'inline');*/
   


    // Enable debugging for more detailed information (optional)
    $mail->SMTPDebug = 2;
    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );
    
    // Send the email
    $mail->send();

    // Success message
    echo "
    <script>
      alert('Message was sent successfully!');
      document.location.href = 'nata_company.php';
    </script>
    ";
  } catch (Exception $e) {
    // Error message if something goes wrong
    echo "Mailer Error: {$mail->ErrorInfo}";
  }
}
?>
