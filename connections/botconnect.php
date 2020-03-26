<?php

$serverName = "127.0.0.1:3307";
$userName = "root";
$userPassword = "";
$dbName = "botchat";

$conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);

?>

<?php $cloud_chat1 = md5($_SERVER['REMOTE_ADDR']); ?>

<?php

$bot_name = "BOT HATSUNE MIKU";
$welcome_text = "HATSUNE MIKU ยินดีตอบคำถามค่ะ";

?>