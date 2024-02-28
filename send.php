<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $API_KEY = "6709500321:AAGYrdgsMCglI9pzsx3zc3iiWZWhM2Ukl6k";//Bot xabar yuboradigan tokeni
    $admin = 6250435647;//Qaysi odamga jo'natiladigan ID

    $text = urlencode("Xabar keldi.\nYuboruvchi ismi: $name\nEmail | TG username: $email\nMavzu: $subject\nXabari: $message");
    $url = "https://api.telegram.org/bot".$API_KEY."/sendMessage?chat_id=$admin&text=$text&parse_mode=markdown";
    file_get_contents($url);
?>