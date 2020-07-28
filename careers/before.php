<?php
  $to = 'john.ugwuanyi@yahoo.com';
  $subject = 'CAREERS@STICKLER';

  $name = $_POST['name'];
  $address = $_POST['address'];
  $suburb = $_POST['suburb'];
  $phone_number = $_POST['phone_number'];
  $email = $_POST['email'];
  $work_hours = $_POST['work_hours'];
  $partner = $_POST['partner'];
  $age = $_POST['age'];
  $message = $_POST['message'];

  $from = "From: CAREERS@STICKLER";

  $attachment = $_FILES['resume'];

  $headers = "From: ". strip_tags($subject) . "\r\n";;
  $headers .= "Reply-To: ". strip_tags($_POST['email']) . "\r\n";
  $headers .= "MIME-Version: 1.0\r\n";
  $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

  $body = '<html><body>';
  $body .= '<div style="background: #317f41; text-align: center;">';
  $body .= '<div style="text-align: center; padding: 13px 0; width: 100%;">';
  $body .= '<h1 style="color: #dbdbd2; font-size: 18px;">CAREERS AT STICKLER</h1>';
  $body .= '<table style="width: 97%; margin-right: auto; margin-left: auto; margin-bottom: 25px; text-align: left; font-size: 18px; border-collapse: collapse; table-layout: fixed " cellpadding="10">';
    $body .= "<tr style='background: #eee; border: 1px solid #ddd; padding: 15px;'><td style='border: 1px solid #ddd;'><strong>Name</strong> </td><td>" . strip_tags($_POST['name']) . "</td></tr>";
    $body .= "<tr style='background: #eee; border: 1px solid #ddd; padding: 15px;'><td style='border: 1px solid #ddd;'><strong>Address</strong> </td><td>" . strip_tags($_POST['address']) . "</td></tr>";
    $body .= "<tr style='background: #eee; border: 1px solid #ddd; padding: 15px;'><td style='border: 1px solid #ddd;'><strong>Suburb</strong> </td><td>" . strip_tags($_POST['suburb']) . "</td></tr>";
    $body .= "<tr style='background: #eee; border: 1px solid #ddd; padding: 15px;'><td style='border: 1px solid #ddd;'><strong>Phone Number</strong> </td><td>" . strip_tags($_POST['phone_number']) . "</td></tr>";
    $body .= "<tr style='background: #eee; border: 1px solid #ddd; padding: 15px;'><td style='border: 1px solid #ddd;'><strong>Email</strong> </td><td>" . strip_tags($_POST['email']) . "</td></tr>";
    $body .= "<tr style='background: #eee; border: 1px solid #ddd; padding: 15px;'><td style='border: 1px solid #ddd;'><strong>Working Hours</strong> </td><td>" . strip_tags($_POST['work_hours']) . "</td></tr>";
    $body .= "<tr style='background: #eee; border: 1px solid #ddd; padding: 15px;'><td style='border: 1px solid #ddd;'><strong>Work Alone or With your Partner</strong> </td><td>" . strip_tags($_POST['partner']) . "</td></tr>";
    $body .= "<tr style='background: #eee; border: 1px solid #ddd; padding: 15px;'><td style='border: 1px solid #ddd;'><strong>Age</strong> </td><td>" . strip_tags($_POST['age']) . "</td></tr>";

    $body .= "<tr style='background: #eee; border: 1px solid #ddd; padding: 15px;'><td style='border: 1px solid #ddd;'><strong>Cleaning Experience</strong> </td><td>" . strip_tags($_POST['message']) . "</td></tr>";
    $body .= "</div>";
    $body .= "</div>";
    $body .= "</table>";
    $body .= "</body></html>";


    mail($to, $subject, $body, $headers);
    echo "<p style='text-align:center; font-size:2rem; font-weight: bold'>Thank You, Your request has been sent!" . " -" . "<a href='../index.html' style='text-decoration:none;color:#ff0099;'> Return Home</a></p>";
    // echo"Your Request has been taken"
?>
