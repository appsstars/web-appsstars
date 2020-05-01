<?php 
    if(isset($_POST['enviar'])){
        if (!empty($_POST['nombre'])&&!empty($_POST['asunto'])&&!empty($_POST['msg'])) {
            $nombre= $_POST['nombre'];
            $asunto= $_POST['asunto'];
            $msg= $_POST['msg'];
            $email="javieruiz1983@gmail.com";
            $header = "From: ".$_POST['correo']."\r\n";
            $header.= "Reply-to: ".$_POST['correo']."\r\n";
            $header.= "X-Mailer: PHP/".phpversion();
            $mail = mail($email,$asunto,$msg,$header);
            if ($mail) {
                echo "<h4>Correctamente enviado</h4>";
            } 
        }
    }
?>