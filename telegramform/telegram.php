<?php
$name = $_POST['user__name'];
$phone = $_POST['user__phone'];
$token = "1483366594:AAGivqcqWtAkkNggkqxLeyv7LQFEtPORt0c";
$chat_id = "401090122";
$arr = array(
    'Имя : ' => $name,
    'Телефон: ' => $phone
);

foreach ($arr as $key => $value) {
    $txt .= "<b>" . $key . "</b>" . $value . "%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}", "r");
