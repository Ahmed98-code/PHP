<?php
$to = 'a@gmail.com';
   $subject = 'subject';
   $body = 'Hello!';
   $headers = array('Content-Type: text/html; charset=UTF-8');
   $headers[] = 'From: Me Myself <a@gmail.com>';
   // $headers[] = 'Cc: John Q Codex <ja@gmail.com>';
   // $headers[] = 'Cc: ja@gmail.com';
   
   $sent = mail( $to, $subject, $body, $headers );

   if($sent) {
   echo "mail inviata";
   }//message sent!
   else  {
   echo "mail non inviata";
   }//message wasn't sent
