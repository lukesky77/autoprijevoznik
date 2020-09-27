<?php 

function sendmail($to, $subject, $message, $from) {
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
    $headers .= 'From: ' . $from . "\r\n";
    $headers .= 'Reply-To: ' .$from . "\r\n";
    $headers .= 'X-Mailer: PHP/' . phpversion();
    if(mail($to, $subject, $message, $headers)){
        return 1;
    } 
    return 0;
}

$content = $_POST['message']."

Telefon: ".$_POST['phone'];


echo sendmail('mail@mail.com', 'TEMAT', $content, $_POST['email']);
	

?>