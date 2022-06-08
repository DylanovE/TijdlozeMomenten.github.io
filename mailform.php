 

<?php
$name = $_POST["name"];
$mail = $_POST["mail"];
$subject = $_POST["categorie"];
$msg = $_POST["bericht"];

echo $name. "<br>";
echo $mail. "<br>";
echo $subject. "<br>";
echo $msg;


    $name     = $_POST['name'];
    $email      = $_POST['mail'];
    $subject    = $_POST['categorie'];
    $message    = $_POST['bericht'];
    $to      = 'dylano228@hotmail.com';
    $from       = $name . ' ' . '<' . $mail . '>';
    $headers    = "From:" . $from . "\r\n" . "CC: dylano.ve@hotmail.com";

if($msg) {
    mail($to, $subject, $message, $headers);
}
//stuurt niks???
?>

