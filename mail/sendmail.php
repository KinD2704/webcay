<?php
    include"PHPMailer/src/PHPMailer.php";
    include"PHPMailer/src/Exception.php";
    include"PHPMailer/src/OAuthTokenProvider.php";
    include"PHPMailer/src/OAuth.php";
    include"PHPMailer/src/POP3.php";
    include"PHPMailer/src/SMTP.php";


    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    class Mailer{
        public function dathangmail($tieude, $noidung, $maildathang){
            $mail = new PHPMailer(true);
            $mail->CharSet = "UTF-8";
            try {
                //Server settings
                $mail->SMTPDebug = 0;                      //Enable verbose debug output
                $mail->isSMTP();                                            //Send using SMTP
                $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
                $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                $mail->Username   = 'datnguyenquy2704@gmail.com';           //SMTP username
                $mail->Password   = 'oyooqxcqstdyoxun';                               //SMTP password
                $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
                $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
            
                //Recipients
                $mail->setFrom('datnguyenquy2704@gmail.com', 'Mailer');
                $mail->addAddress($maildathang, 'QUYDAT');     //Add a recipient
                // $mail->addAddress('datnguyenquy270420@gmail.com', 'KinD');               //Name is optional
                // Name is optional
                // $mail->addReplyTo('info@example.com', 'Information');
                $mail->addCC('datnguyenquy2704@gmail.com'); // tự gửi lại chính mình 1 bản
                // $mail->addBCC('bcc@example.com');
            
                //Attachments
                // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
                // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
            
                //Content
                $mail->isHTML(true);                                  //Set email format to HTML
                $mail->Subject = $tieude;
                $mail->Body    = $noidung;
                // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
            
                $mail->send();
                echo 'Message has been sent';
            } catch (Exception $e) {
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }
        }
    }

?>