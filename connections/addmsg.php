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
        $check = array('/porn/','/เรื่องเสียว/','/คลิปเสียว/','/คลิปหลุด/','/คลิปโป๊/','/หนังโป๊/','/เสียว/','/18+/','/โป๊/','/xvideo/','/pornhub/','/xnxx/','/xxx/','/pussy/','/fucking/','/fucker/','/dick/','/cumshot/','/blowjob/','/bitch/','/asshole/','/ชิบหาย/','/สวะ/','/ส้นตีน/','/หรรม/','/กระหรี่/','/กะหรี่/','/เย็ด/','/จังไร/','/โง่/','/ห่า/','/ควาย/','/แม่/','/พ่อง/','/พ่อ/','/เจี๊ยว/','/จู๋/','/สถุน/','/หมอย/','/แตด/','/สาส/','/สัส/','/สัด/','/แม่ง/','/ตอแหล/','/เสือก/','/ร่าน/','/เงี่ยน/','/กระดอ/','/ไอ้/', '/บ้า/','/มึง/','/fuck/', '/แม่ง/', '/เลว/', '/ฟาย/', '/สัส/', '/สัด/', '/ฉิหาย/', '/กู/', '/เหี้ย/', '/ควย/', '/ดอกทอง/', '/อีดอก/' , '/อี/', '/ควย/', '/หี/', '/ด้าน/', '/กระจอก/', '/จิ๋ม/', '/หำ/', '/หัม/');
        for ($i=0; $i<count($check); $i++)
            {
                $txt = preg_replace($check[$i], '***', $txt);
            }

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
