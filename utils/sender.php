<?php
if ($_POST['name']) {
    $body = 'Сообщение с сайта localhost'."\r\n";
    $body.= 'Имя пользователя: '.$_POST['name'];
    $headers = 'From: webmaster@example.com' . "\r\n" .
        'Reply-To: webmaster@example.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
    mail('khr.nastasia@gmail.com', 'New message', $body, $headers);
    header('location: /');
} else {
    echo 'Пусто';
}
