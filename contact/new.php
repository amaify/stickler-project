<?php
$postData = $uploadedFile = $statusMsg = '';
$msgClass = 'errordiv';
if(isset($_POST['submit'])){
    // Get the submitted form data
    $postData = $_POST;
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $services = $_POST['service'];
    $message = $_POST['message'];

    // Check whether submitted data is not empty
    if(!empty($name) && !empty($email) && !empty($subject) && !empty($services) && !empty($message)){

        // Validate email
        if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
            $statusMsg = 'Please enter your valid email.';
        }else{
            $uploadStatus = 1;

            // Upload attachment file
            if(!empty($_FILES["attachment"]["name"])){

                // File path config
                $targetDir = "uploads/";
                $fileName = basename($_FILES["attachment"]["name"]);
                $targetFilePath = $targetDir . $fileName;
                $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

                // Allow certain file formats
                $allowTypes = array('pdf', 'doc', 'docx', 'jpg', 'png', 'jpeg');
                if(in_array($fileType, $allowTypes)){
                    // Upload file to the server
                    if(move_uploaded_file($_FILES["attachment"]["tmp_name"], $targetFilePath)){
                        $uploadedFile = $targetFilePath;
                    }else{
                        $uploadStatus = 0;
                        $statusMsg = "Sorry, there was an error uploading your file.";
                    }
                }else{
                    $uploadStatus = 0;
                    $statusMsg = 'Sorry, only PDF, DOC, JPG, JPEG, & PNG files are allowed to upload.';
                }
            }

            if($uploadStatus == 1){

                // Recipient
                $toEmail = 'john.ugwuanyi@yahoo.com';

                // Sender
                $from = 'www.sticklercleaningservices.com';
                $fromName = 'CONTACT@STICKLER';

                // Subject
                $emailSubject = 'Contact Request Submitted by '.$name;

                // Message
                $htmlContent =
                '
                <html><body>
                <div style="background: #317f41; text-align: center;">
                <div style="text-align: center; padding: 13px 0; width: 100%;">
                <table rules="all" style="width: 97%; margin-right: auto; margin-left: auto; margin-bottom: 25px; text-align: left; font-size: 18px; border-collapse: collapse; table-layout: fixed " cellpadding="10">
                <h1 style="color: #dbdbd2; font-size: 18px;">Contact Request Submitted</h1>
                    <tr style="background: #eee; border: 1px solid #ddd; padding: 15px;"><td style="border: 1px solid #ddd;"><p><b>Name</b></td><td> '.$name.'</p></td></tr>
                    <tr style="background: #eee; border: 1px solid #ddd; padding: 15px;"><td style="border: 1px solid #ddd;"><p><b>Email</b></td><td> '.$email.'</p></td></tr>
                    <tr style="background: #eee; border: 1px solid #ddd; padding: 15px;"><td style="border: 1px solid #ddd;"><p><b>Subject</b></td><td> '.$subject.'</p></td></tr>
                    <tr style="background: #eee; border: 1px solid #ddd; padding: 15px;"><td style="border: 1px solid #ddd;"><p><b>Type of Service Request</b></td><td> '.$services.'</p></td></tr>
                    <tr style="background: #eee; border: 1px solid #ddd; padding: 15px;"><td style="border: 1px solid #ddd;"><p><b>Message</b></td><td>'.$message.'</p></td></tr>
                </table>
                </div>
                </div>
                </body></html>
                ';


                // Header for sender info
                $headers = "From: $fromName"." <".$from.">";

                if(!empty($uploadedFile) && file_exists($uploadedFile)){

                    // Boundary
                    $semi_rand = md5(time());
                    $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";

                    // Headers for attachment
                    $headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\"";

                    // Multipart boundary
                    $message = "--{$mime_boundary}\n" . "Content-Type: text/html; charset=\"UTF-8\"\n" .
                    "Content-Transfer-Encoding: 7bit\n\n" . $htmlContent . "\n\n";

                    // Preparing attachment
                    if(is_file($uploadedFile)){
                        $message .= "--{$mime_boundary}\n";
                        $fp =    @fopen($uploadedFile,"rb");
                        $data =  @fread($fp,filesize($uploadedFile));
                        @fclose($fp);
                        $data = chunk_split(base64_encode($data));
                        $message .= "Content-Type: application/octet-stream; name=\"".basename($uploadedFile)."\"\n" .
                        "Content-Description: ".basename($uploadedFile)."\n" .
                        "Content-Disposition: attachment;\n" . " filename=\"".basename($uploadedFile)."\"; size=".filesize($uploadedFile).";\n" .
                        "Content-Transfer-Encoding: base64\n\n" . $data . "\n\n";
                    }

                    $message .= "--{$mime_boundary}--";
                    $returnpath = "-f" . $email;

                    // Send email
                    $mail = mail($toEmail, $emailSubject, $message, $headers, $returnpath);

                    // Delete attachment file from the server
                    @unlink($uploadedFile);
                }else{
                     // Set content-type header for sending HTML email
                    $headers .= "\r\n". "MIME-Version: 1.0";
                    $headers .= "\r\n". "Content-type:text/html;charset=UTF-8";

                    // Send email
                    $mail = mail($toEmail, $emailSubject, $htmlContent, $headers);
                }

                // If mail sent
                if($mail){
                    $statusMsg = 'Your contact request has been submitted successfully !';
                    $msgClass = 'succdiv';

                    $postData = '';
                }else{
                    $statusMsg = 'Your contact request submission failed, please try again.';
                }
            }
        }
    }else{
        $statusMsg = 'Please fill all the fields.';
    }
}
?>
