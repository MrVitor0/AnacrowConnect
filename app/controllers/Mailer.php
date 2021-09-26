<?php
     namespace Controller;   

        use \PHPMailer\PHPMailer\PHPMailer;
        use \PHPMailer\PHPMailer\SMTP;
     
        class Mailer extends \Interface\Model{

            const EMAIL = $_ENV['_SMTP_EMAIL'];
            const PASSWORD = $_ENV['_SMTP_PASSWORD'];
            const NAME = $_ENV['_SMTP_NAME'];
           // const SET_FROM_EMAIL = $_ENV[_SMTP_SET_FROM_EMAIL];
            const REPLY_TO_EMAIL = $_ENV['_SMTP_REPLY_TO_EMAIL'];
            // const REPLY_TO_NAME = $_ENV['_SMTP_REPLY_TO_NAME'];
            const HOST = $_ENV['_SMTP_HOST'];
            const PORT = $_ENV['_SMTP_PORT'];

            private $mail;



                public function __construct(
                
                    
                    $subject,
                    $tplname,
                    $data = array(),
                    $toAddress,
                    $toName

                ){


                    $page = new \Middleware\mailler([

                        'header' => false,
                        'footer' => false

                        ]);
                    
                   $html =  $page->setTpl( $tplname, $data, true  );

                   try{




                    date_default_timezone_set('Etc/UTC');

                    $subject = utf8_decode($subject);
                    $name = utf8_decode(Mailer::NAME);
                    $toName = utf8_decode($toName);
                    // $reply_to_name = utf8_decode(Mailer::REPLY_TO_NAME);

                    //Create a new PHPMailer instance
                    $this->mail = new \PHPMailer();
                    //Tell PHPMailer to use SMTP
                    $this->mail->isSMTP();

                  
                  // CERTIFICADO SSL
                  
                    $this->mail->SMTPOptions = array(

                        'ssl' => array(

                            'verify_peer'=>false,
                            'verify_peer_name'=>false,
                            'allow_self_signed' => true

                        )

                    );


                    //Enable SMTP debugging
                    //SMTP::DEBUG_OFF = off (for production use)
                    //SMTP::DEBUG_CLIENT = client messages
                    //SMTP::DEBUG_SERVER = client and server messages
                    $this->mail->SMTPDebug = \SMTP::DEBUG_OFF; 
                    //Set the hostname of the mail server
                    $this->mail->Host = Mailer::HOST;
                    //Set the SMTP port number - likely to be 25, 465 or 587
                    $this->mail->Port = Mailer::PORT;
                    //Whether to use SMTP authentication
                    $this->mail->SMTPAuth = true;
                    //Username to use for SMTP authentication
                    $this->mail->Username = Mailer::EMAIL;
                    //Password to use for SMTP authentication
                    $this->mail->Password = Mailer::PASSWORD;
                    //Set who the message is to be sent from
                    $this->mail->setFrom(Mailer::EMAIL, $name );
                    //Set an alternative reply-to address
                    // $this->mail->addReplyTo(Mailer::REPLY_TO_EMAIL, $reply_to_name);
                    //Set who the message is to be sent to
                    $this->mail->addAddress($toAddress, $toName);
                    //Set the subject line
                    $this->mail->Subject = $subject;
                    //Read an HTML message body from an external file, convert referenced images to embedded,
                    //convert HTML into a basic plain-text alternative body
                    $this->mail->msgHTML($html);
                    //Replace the plain text body with one created manually
                    $this->mail->AltBody = $html; //Email alternativo para navegadores que não suportam HTML bruto
                    //Attach an image file
                    $this->mail->addAttachment('images/phpmailer_mini.png');



                   


                   }//end try
                   catch(\Exception $e){
                        return false;
                   }//end Catch
                                                                                                                                                                                                                                                                                

                }//end method
                    


                public function send()
                {

                    try{
                        return $this->mail->send();
                    }//end try
                    catch(\Exception $e){
                        return false;
                    }//end catch

                }





            }//End Class

?>