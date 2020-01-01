<?php

namespace lib;


class Mailer{

    protected $mail;

    public function __construct(){

        $this->mail = new \PHPMailer\PHPMailer\PHPMailer(true);
        $this->mail->SMTPDebug = \PHPMailer\PHPMailer\SMTP::DEBUG_SERVER;                      // Enable verbose debug output
        $this->mail->isSMTP();                                            // Send using SMTP
        $this->mail->Host       = 'smtp1.example.com';                    // Set the SMTP server to send through
        $this->mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $this->mail->Username   = 'user@example.com';                     // SMTP username
        $this->mail->Password   = 'secret';                               // SMTP password
        $this->mail->SMTPSecure = \PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
        $this->mail->Port       = 587;
    }

    public function sendPost(){
    		try{
    			$this->mail->send();
				}catch (\PHPMailer\PHPMailer\Exception $e){
					echo "Message could not be sent. Mailer Error: {$this->mail->ErrorInfo}";
				}
    }

    public function setRecipients(){


    }

    public function setAttachments(){


    }


    public function setContent(){

    }
}