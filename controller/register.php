<?php
error_reporting(E_ALL);
require '../config/config.php';
require '../models/User.php';
require '../../vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
$bd = new \models\DB();
$msg = $_POST['name'].', благодарим за регистрацию на нашем сервисе! По всем техническим вопросам обращайтесь к администратору по адресу service@imdibil.ru';
$pw = md5($_POST['password']);
$bd->conn->query("INSERT INTO `users`(`name`, `status`, `password`, `email`) VALUES ('{$_POST['name']}', '1', '$pw', '{$_POST['email']}')");
sendEmail($_POST['email'], $_POST['name'], $msg);
session_start();

$_SESSION['user'] = $bd->conn->insert_id;

header("Location: https://imdibil.ru/scheduler");







function sendEmail($email, $name, $text)
{
	$mail = new PHPMailer(true);

//Server settings
	$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
$mail->isSMTP();                                            //Send using SMTP
	$mail->Host = 'mail.imdibil.ru';                     //Set the SMTP server to send through
	$mail->SMTPAuth = true;                                   //Enable SMTP authentication
	$mail->Username = 'noreply@imdibil.ru';                     //SMTP username
	$mail->Password = 'fERFw45RSF';                               //SMTP password
	$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
	$mail->SMTPSecure = 'ssl';            //Enable implicit TLS encryption
	$mail->Port = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
	$mail->CharSet = "utf-8";
//Recipients
	$mail->setFrom('noreply@imdibil.ru');
//if ($subs->num_rows == 0) {
//    echo 'nobody to sent';
//    exit;
//}

//$array = ['kochura2017@yandex.ru', 'kocuradanil@gmail.com', 'better22@yandex.ru'];
//while ($row = $subs->fetch_assoc()) {
//    $id_s = $row['id'];
//    $key = $row['id'] * 151;
//    $email = $row['email'];
//    $key .= 'a';


	//Create an instance; passing `true` enables exceptions
	//Add a recipient
//    $email = 'kochura2017@yandex.ru';
//    $email = 'maximka_shamin@mail.ru';
//    $email = 'test-bqywsdvbn@srv1.mail-tester.com';
	$mail->addAddress($email);               //Name is optional
	//$mail->addReplyTo('info@example.com', 'Information');
	//$mail->addCC('cc@example.com');
	//$mail->addBCC('bcc@example.com');

	//Attachments
	// $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
	//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

	//Content
//	$mail->isHTML(true);                                  //Set email format to HTML
	$mail->Subject = 'Регистрация на сервисе Scheduler';
	$mail->Body = $text;
	$mail->AltBody = $text;


	$mail->send();

}
