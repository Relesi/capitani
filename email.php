<?php
/**
 * Created by PhpStorm.
 * User: Renato Lessa
 * Date: 10/03/16
 * Time: 20:19
 */




$name = htmlspecialchars(strip_tags($_POST['name']));
$email = htmlspecialchars(strip_tags($_POST['email']));
$assunto = htmlspecialchars(strip_tags($_POST['assunto']));
$message = htmlspecialchars(strip_tags($_POST['message']));

$refresh = '<meta http-equiv="refresh" content="1; url=contato.php" />';
$refresh1 = '<meta http-equiv="refresh" content="1; url=index.php" />';

  
 if(!filter_var($email, FILTER_SANITIZE_EMAIL))
  {
      echo '<script type="text/javascript">alert("Preencha todos os campos para o e-mail ser enviado.")</script>';
      exit ($refresh);
  }

  if ($name != '' && $email != '' && $assunto != '' && $message != '')
  {
      $msg = "Nome: $name \n";
      $msg .= "E-mail: $email \n";
      $msg .= "assunto: $assunto \n";
      $msg .= "mensagem: $message \n";
      $recipient = "capitani@relesi.com.br";
      $subject = "Contato Capitani";
      $header = "MIME-Version: 1.0\r\n";
      $header .= "Content-Type: text/html; charset=iso-8859-1\r\n";
      $header .= "From: $email\r\n";
      $envio = mail("capitani@relesi.com.br", "Capitani - Soluções em Recrutameno e TI", "Mensagem", $header, "-f$email_remetente");



     $header =  "Content-Type:text/html; charset=UTF-8\n";



      $email_remetente = "capitani@relesi.com.br";
      $header = "MIME-Version: 1.1\n";
      $header .= "Content-type: text/plain; charset=iso-8859-1\n";
      $header .= "From: $email_remetente\n"; // remetente
      $header .= "Return-Path: $email_remetente\n"; // return-path
      $header .= "Reply-To: $email\n"; // Endereço (devidamente validado) que o seu usuário informou no contato




      if (mail ($recipient, $subject, $msg, $header, $email_remetente))
      {
          echo '<script type="text/javascript">alert("Contato enviado com sucesso.")</script>';
          exit ($refresh1);
                       



      } else {
          echo '<script type="text/javascript">alert("Problema no envio da mensagem. Por favor tente mais tarde..")</script>';
          exit ($refresh);
      }
  }     else{
        echo '<script type="text/javascript">alert("Por favor preencha todos os campos.")</script>';
      exit ($refresh);
  }
?>














