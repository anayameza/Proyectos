<?php

if(isset($_POST['enviar'])){
    if(!empty($_POST['name']) && !empty($_POST['email']) &&!empty($_POST['phone']) && !empty($_POST['message'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $message = $_POST['message'];
        $header = "From: anibalmma2002@gmail.com" . "\r\n";
        $header = "Reply-To: anibalmma2002@gmail.com" . "\r\n";
        $header = "X-Mailer: PHP/". phpversion();
        $mail = @mail($name,$email,$phone,$message,$header);
        if($mail){
            echo "<h4>Mail enviado exitosamente</h4>";  
        }

    }
}
?>