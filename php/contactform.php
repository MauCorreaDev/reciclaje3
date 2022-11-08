<?php 
if (isset($_POST['submit'])){
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];

    $mailTo = "maucorreadev@gmail.com";
    $headers ="From: ".$mailFrom;

    $txt = "Has recibido un correo electroncio de: ".$name."./n/n".$message;

    mail ($mailTo,$subject,$txt,$headers);

    header("Location: contacto.php?mailsend");

    
}