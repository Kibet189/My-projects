

<?php require 'header.php';

$to = 'wilsonkibet189@gmail.com';

$subject = 'Test mail';

$message = 'Hello This is a test email message.';

$from = 'sossion@gmail.com';

$headers = 'From:' . $from;

mail($to,$subject,$message,$headers);

echo 'Mail Sent.';

?>