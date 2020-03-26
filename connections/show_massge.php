<html>
<head>
<link rel="stylesheet" type="text/css" href="dist/sweetalert.css">
	<link href="assets/css/bootstrap.css" rel="stylesheet">
	<link href="assets/css/animate.css" rel="stylesheet">
	<script src="assets/js/sweetalert.min.js"></script>
	<script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/popupmassage.js"></script>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Kanit&display=swap" rel="stylesheet">
    <style>body{ font-family: Kanit;}</style>
<?php require_once('botconnect.php') ?>
<?php
    $sql = "SELECT * FROM cloud_chat WHERE chat_id='$cloud_chat1'";
    $query = mysqli_query($conn,$sql);
    $data = mysqli_fetch_assoc($query);
?>
</head>
<body>
<?php do { ?>

    <div class="w-100 pt-0 float-right">&nbsp;</div>
        <div class="pr-0 pt-0 float-right w-100">
        <div class="float-right">
            <div class="card text-white bg-primary w-100 float-right" style="max-width: 18rem;border-radius: 10px;padding-left:15px;padding-right:15px;box-shadow: 0 4px 8px 0 rgba(0,0,0,0.5);">
                <div class="card-title pt-2 text-white"><?php if ((isset($data['question']))) {echo $data['question']; } else { echo 'รอการถามคำถาม'; }?></div>
            </div>
        </div>
        </div>

    <?php if ((isset($data['question']))) { 
          $ques = $data['question'];
          $check = "SELECT * FROM bot_answer WHERE b_question = '$ques'";
          $result = mysqli_query($conn,$check);
          $num = mysqli_num_rows($result); 
          if($num > 0){
            $sql_bot = "SELECT * FROM bot_answer WHERE b_question = '$ques'";
            $query_bot = mysqli_query($conn,$sql_bot);
            $data_bot = mysqli_fetch_assoc($query_bot);
            $warp_bot = $data_bot['warp_tb'];
            if($data_bot['q_type'] == "text"){?>

            <div class="w-100 pt-1 col-12">&nbsp;</div>
                <div class="pl-2 pt-1 row">
                <img src="assets/img/botprofile.jpg" style="border-radius: 100%; width:45px;height:45px; box-shadow: 0 4px 8px 0 rgba(0,0,0,0.5);"/><div class="pl-3"></div>
                    <div class="card text-white bg-dark col-11" style="max-width: 18rem;border-radius: 10px;padding-left:15px;padding-right:15px;box-shadow: 0 4px 8px 0 rgba(0,0,0,0.5);">
                         <div class="card-title pt-2 text-white"><?php echo $data_bot['answer']?></div>
                    </div>
                </div>
            
            
        <?php }elseif($data_bot['q_type'] == "image"){
           $sql_img = "SELECT * FROM image_type WHERE i_tb = '$warp_bot' ";
           $query_img = mysqli_query($conn,$sql_img);
           $data_img = mysqli_fetch_assoc($query_img);?>

                <div class="w-100 pt-1 col-12">&nbsp;</div>
                    <div class="pl-2 pt-1 row">
                    <img src="assets/img/botprofile.jpg" style="border-radius: 100%; width:45px;height:45px; box-shadow: 0 4px 8px 0 rgba(0,0,0,0.5);"/><div class="pl-3"></div>
                        <div class="card text-white p-0 bg-dark col-11" style="max-width: 18rem;border-radius: 10px;padding-left:15px;padding-right:15px;box-shadow: 0 4px 8px 0 rgba(0,0,0,0.5);">
                            <div class="card-header pt-2 pl-3 text-white"><?php echo $data_img['i_answer'] ?></div>
                            <div class="card-body p-0">
                                <img src="assets/img/image_answer/<?php echo $data_img['q_image'] ?>" style="max-width: 17.9rem;border-bottom-right-radius: 10px;border-bottom-left-radius: 10px;"/>
                            </div>
                        </div>
                </div>
            
        <?php }elseif($data_bot['q_type'] == "button"){
            $sql_bot_btn = "SELECT * FROM button_type WHERE btn_tb = '$warp_bot'";
            $query_bot_btn = mysqli_query($conn,$sql_bot_btn);
            $data_bot_btn = mysqli_fetch_assoc($query_bot_btn);?>
                    <div class="w-100 pt-1 col-12">&nbsp;</div>
                    <div class="pl-2 pt-1 row">
                    <img src="assets/img/botprofile.jpg" style="border-radius: 100%; width:45px;height:45px; box-shadow: 0 4px 8px 0 rgba(0,0,0,0.5);"/><div class="pl-3"></div>
                        <div class="card text-white p-0 bg-dark col-11" style="max-width: 18rem;border-radius: 10px;padding-left:15px;padding-right:15px;box-shadow: 0 4px 8px 0 rgba(0,0,0,0.5);">
                            <div class="card-title pt-2 pl-3 text-white"><?php echo $data_bot_btn['btn_answer'] ?></div>
                            <div class="card-body pt-0 pl-2 pr-2 pb-2">
                                <a href="<?php echo $data_bot_btn['btn_url'] ?>" target="_blank"><button type="button" class="btn w-100 btn-sm text-white" style="background-color:<?php echo $data_bot_btn['btn_color'] ?>;"><i class="<?php echo $data_bot_btn['btn_icon'] ?>"></i> <?php echo $data_bot_btn['btn_txt'] ?></button></a>
                            </div>
                        </div>
                    </div>
            
        <?php }else{?>
            <div class="w-100 pt-1 col-12">&nbsp;</div>
                <div class="pl-2 pt-1 row">
                    <img src="assets/img/botprofile.jpg" style="border-radius: 100%; width:45px;height:45px; box-shadow: 0 4px 8px 0 rgba(0,0,0,0.5);"/><div class="pl-3"></div>
                    <div class="card text-white col-11 bg-danger" style="max-width: 18rem;border-radius: 10px;padding-left:15px;padding-right:15px;box-shadow: 0 4px 8px 0 rgba(0,0,0,0.5);">
                         <div class="card-title pt-2 text-white">ประเภทการตอบกลับนี้ไม่มีในฐานข้อมูล</div>
                    </div>
                </div>
        <?php } ?>
    <?php } else { ?>
            <div class="w-100 pt-1 col-12">&nbsp;</div>
                <div class="pl-2 pt-1 row">
                    <img src="assets/img/botprofile.jpg" style="border-radius: 100%; width:45px;height:45px; box-shadow: 0 4px 8px 0 rgba(0,0,0,0.5);"/><div class="pl-3"></div>
                    <div class="card text-white bg-dark col-11" style="max-width: 18rem;border-radius: 10px;padding-left:15px;padding-right:15px;box-shadow: 0 4px 8px 0 rgba(0,0,0,0.5);">
                         <div class="card-title pt-2 text-white">ไม่มีคำตอบของคำถามนี้ในฐานข้อมูลค่ะ</div>
                    </div>
                </div>
        <?php }}else { echo ''; } ?>

        
<?php }while ($data = mysqli_fetch_assoc($query)); ?>
</body>
<html>