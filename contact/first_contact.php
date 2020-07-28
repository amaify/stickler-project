<?php
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];
  $from = "MESSAGE@STICKLER";
  $to = "john.ugwuanyi@yahoo.com";

  $headers = "From: " . strip_tags($from) . "\r\n";
  $headers .= "Reply-To: ". strip_tags($_POST['email']) . "\r\n";
  $headers .= "MIME-Version: 1.0\r\n";
  $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
//   $body = "Name: $name\n E-mail: $email\n Message:\n $message";
//   $body = "
//         Name: $name

//         Email: $email

//         Message: $message


//   ";

    $body = '<html><body>';
    $body .= '<div style="background: #317f41; text-align: center;">';
    $body .= '<div style="text-align: center; padding: 13px 0; width: 100%;">';
    $body .= '<table rules="all" style="width: 97%; margin-right: auto; margin-left: auto; margin-bottom: 25px; text-align: left; font-size: 18px; border-collapse: collapse; table-layout: fixed " cellpadding="10">';
    $body .= '<h1 style="color: #dbdbd2; font-size: 18px;">NEW MESSAGE</h1>';
    $body .= "<tr style='background: #eee; border: 1px solid #ddd;'><td style='border: 1px solid #ddd;'><strong>Name</strong> </td><td>" . strip_tags($_POST['name']) . "</td></tr>";
    $body .= "<tr style='background: #eee; border: 1px solid #ddd;'><td style='border: 1px solid #ddd;'><strong>Email</strong> </td><td>" . strip_tags($_POST['email']) . "</td></tr>";
    $body .= "<tr style='background: #eee; border: 1px solid #ddd;'><td style='border: 1px solid #ddd;'><strong>Message</strong> </td><td>" . strip_tags($_POST['message']) . "</td></tr>";
    $body .= "</table>";
    $body .= "</div>";
    $body .= "</div>";
    $body .= '</body></html>';


//   if ($_POST['submit']) {
//     if (mail($to, $subject, $body, $from)) {
//       echo "<p style='text-align:center; font-size:2rem; font-weight: bold'>Thank You, Your message has been sent!" . " -" . "<a href='../index.html' style='text-decoration:none;color:#ff0099;'> Return Home</a></p>";
//     }else {
//       echo "<p>Something went wrong!</p>";
//     }
//   }

    mail($to, $subject, $body, $headers);
    echo "<p style='text-align:center; font-size:2rem; font-weight: bold'>Thank You, Your message has been sent!" . " -" . "<a href='../index.html' style='text-decoration:none;color:#ff0099;'> Return Home</a></p>";
?>
