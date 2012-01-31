<?php

include('class.smtp.php');


// $mail = new Smtp(server, port, crypto, user, pass);
// crypto can be: null, tls or ssl
$mail = new Smtp('smtp.gmail.com', '25', 'tls', 'user', 'pass');

// for localhost server no auth/crypto is needed:
// $mail = new Smtp('localhost', '25');

// $mail->send(from, to, subject, body, headers = optional)
$mail->send('x@gmail.com', 'y@gmail.com', 'test mail', 'horay!');

// more emails can be sent on the same connection:
$mail->send('x@gmail.com', 'z@gmail.com', 'test mail 2', 'yay!');

?>
