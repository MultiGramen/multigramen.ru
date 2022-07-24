<?php
$nameuser = htmlspecialchars(strip_tags(trim($_POST['name'])));
$emailuser = htmlspecialchars(strip_tags(trim($_POST['email'])));
$messageuser = htmlspecialchars(strip_tags(trim($_POST['message'])));

session_start();
$_SESSION['status'] = 'success';

$mail = new PHPMailer(true);

$resultMailUserAuth = $connection->query("SELECT * FROM `mailUserAuth` WHERE `id`='1'");
$mailUserAuth = $resultMailUserAuth->fetch(PDO::FETCH_ASSOC);
$resultMailAddresses = $connection->query("SELECT * FROM `mailAddresses` WHERE `id`='1'");
$mailAddresses = $resultMailAddresses->fetch(PDO::FETCH_ASSOC);

try {
    $mail->isSMTP();
    $mail->Host = $mailUserAuth['host'];
    $mail->SMTPAuth = $mailUserAuth['SMTPAuth'];
    $mail->Username = $mailUserAuth['UserName'];
    $mail->Password = $mailUserAuth['Password'];
    $mail->SMTPSecure = $mailUserAuth['SMTPSecure'];
    $mail->Port = $mailUserAuth['Port'];
    $mail->CharSet = $mailUserAuth['Charset'];
    //Отправитель
    $mail->setFrom($mailAddresses['sender'], "$nameuser");
    // Получатели
    $mail->addAddress($mailAddresses['recipient'], $mailAddresses['name']);

    //Контент сообщения
    $mail->isHTML(true);
    $mail->Subject = 'Письмо с сайта MultiGramen';
    $mail->Body    = "E-Mail: $emailuser<br />$messageuser";
    $mail->send();
} catch (Exception $e) {
    echo 'При отправке сообщения произошла ошибка';
}

unset($mailUserAuth);
unset($mailAddresses);
$mail->clearAddresses();
$mail->clearAttachments();

header('Location: contacts.php');