<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Kontaktformular</title>
  </head>
  <body>
    <?php

      $honeypot = $_POST ['honeypot'];
      header ('Content-type: text/plain; charset=utf-8');
      $headers ='Content-Type: text/plain; charset=utf-8' . "\r\n";
      $headers = '=?UTF-8?B?' . base64_encode($subject_text) . '?=';

    if(isset($_POST["submit"]) && empty($honeypot)){
      mail("post@hotelfilling.de", "Kontaktformular", 'Name: '.$_POST["name"].' Email: '.$_POST["email"].' Prioritaet: '.$_POST["priorität"].' Nachricht: '.$_POST["message"], $headers);
      
      
      ?>
      <h1 style="color: green;">Das Kontaktformular wurde abgesendet!</h1>
      <?php
    }
    else{
      ?>
       <h1 style="color: green;">SPAM!</h1>
    <?php }

     ?>
    
  </body>
</html>






