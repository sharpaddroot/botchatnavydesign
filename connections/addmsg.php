<?php
require_once('botconnect.php');


$MM_insert = $_POST['MM_insert'];
$questtext = $_POST['newtext'];

if ((isset($MM_insert)) && ($MM_insert == "postmassage")) {
    if($questtext == '') {
        echo "<script>unsendFunction();</script>";
    }else{
        echo "<meta charset='utf-8'>";     
        $txt = $questtext;

        $sql = "INSERT INTO cloud_chat (question, chat_id) VALUES ('".$txt."','$cloud_chat1')";
        $query = mysqli_query($conn,$sql);

		date_default_timezone_set("Asia/Bangkok");
        $log_date = date("d/m/Y H:i:s");
        $tag = rand(0,9999);
        $sql_log = "INSERT INTO log (text_log, user, date_log, tag) VALUES ('".$txt."','$cloud_chat1','$log_date', '".$tag."')";
		$query = mysqli_query($conn,$sql_log);
		
        if($query) {
            $questtext = '';
            echo "<script>sendFunction();</script>";
        }
    }
}
?>