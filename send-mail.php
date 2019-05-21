<?php


if( isset( $_POST['send-mail-btn'] ) && isset( $_FILES['attachment'] ) ){
    $from_email         = 'noreply@your_domain.com'; //from mail, it is mandatory with some hosts
    $recipient_email    = filter_input( INPUT_POST, 'email', FILTER_VALIDATE_EMAIL ); //recipient email (most cases it is your personal email)
    $phone = filter_input( INPUT_POST, 'phone', FILTER_SANITIZE_STRING );
    $address = filter_input( INPUT_POST, 'address', FILTER_SANITIZE_STRING );
    $msg = filter_input( INPUT_POST, 'msg', FILTER_SANITIZE_STRING );

    //Capture POST data from HTML form and Sanitize them, 
    $sender_name    = filter_var($_POST["fName"], FILTER_SANITIZE_STRING); //sender name
    $subject        = filter_var($_POST["subject"], FILTER_SANITIZE_STRING); //get subject from HTML form

    $message = "<h1>E-mail With Attachment:</h1>";
    $message .= "<div><p><strong>Name : </strong> $sender_name</p></div>";
    $message .= "<div><p><strong>Phone :  </strong>$phone</p></div>";
    $message .= "<div><p><strong>Address :  </strong>$address</p></div>";
    $message .= "<div><p><strong>Message :  </strong>$msg</p></div>";

    //Get uploaded file data
    $file_tmp_name    = $_FILES['attachment']['tmp_name'];
    $file_name        = $_FILES['attachment']['name'];
    $file_size        = $_FILES['attachment']['size'];
    $file_type        = $_FILES['attachment']['type'];
    $file_error       = $_FILES['attachment']['error'];

    if($file_error > 0)
    {
        die('Upload error or No files uploaded');
    }
    //read from the uploaded file & base64_encode content for the mail
    $handle = fopen($file_tmp_name, "r");
    $content = fread($handle, $file_size);
    fclose($handle);
    $encoded_content = chunk_split(base64_encode($content));

    $boundary = md5("sanwebe");
    //headers
    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "From:".$from_email."\r\n";
    $headers .= "Reply-To: donotreply@understandthis.com \r\n";
    $headers .= "Content-Type: multipart/mixed; boundary = $boundary\r\n\r\n";

    //body plain text
    $body = "--$boundary\r\n";
    $body .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
    $body .= "Content-Transfer-Encoding: base64\r\n\r\n";
    $body .= chunk_split(base64_encode($message));

    //attachment file
    $body .= "--$boundary\r\n";
    $body .="Content-Type: $file_type; name=".$file_name."\r\n";
    $body .="Content-Disposition: attachment; filename=".$file_name."\r\n";
    $body .="Content-Transfer-Encoding: base64\r\n";
    $body .="X-Attachment-Id: ".rand(1000,99999)."\r\n\r\n";
    $body .= $encoded_content;
    $sentMail = mail($recipient_email, $subject, $body, $headers);
    if($sentMail) //output success or failure messages
    {       
        echo "Congrats! Your mail has been sent. Please check your inbox.";
    }else{
        echo "Oops! Something wen wrong. Please check your code.";
    }
}