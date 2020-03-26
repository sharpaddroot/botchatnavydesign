<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>CONTROL BOT CHAT</title>
<link rel="shortcut icon" href="../assets/img/icon.png" type="image/png">
    <link rel="stylesheet" type="text/css" href="dist/sweetalert.css">
	<link href="../assets/css/bootstrap.css" rel="stylesheet">
	<link href="../assets/css/animate.css" rel="stylesheet">
	<script src="../assets/js/sweetalert.min.js"></script>
	<script src="../assets/js/bootstrap.js"></script>
    <script src="../assets/js/popupmassage.js"></script>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Kanit&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <style>body{ font-family: Kanit;background:url("../assets/img/background1.jpg") no-repeat center center fixed;}</style>
    <?php require_once('botconnect.php') ?>
</head>
<body>
    <div class="container pt-5">
    <h2 class="text-center"><b><div class="badge badge-dark pt-3 pb-3 text-wrap w-100"><u>BOT CHAT By NAVy DESIGn</u></div></b></h2>
    </div>

    <div class="container pt-0">

        <div class="row pt-2">
            <div class="col-lg-4">
                <div class="card bg-light w-100" style="border:0;box-shadow: 0 4px 8px 0 rgba(0,0,0,0.5);">
                <div class="card-header bg-primary text-white h5"><b><i class="fas fa-cog"></i> เมนูการตั้งค่า</b></div>
                <div class="card-body" >
                    <p class="card-text"><a href="bot_chat_control.php"><button type="button"  class="btn btn-primary btn-md w-100"><i class="fas fa-italic"></i> เพิ่มการตอบกลับ แบบข้อความ</button></a></p>
                    <p class="card-text"><a href="bot_chat_control.php"><button type="button"  class="btn btn-success btn-md w-100"><i class="fas fa-image"></i> เพิ่มการตอบกลับ แบบรูปภาพ</button></a></p>
                    <p class="card-text"><a href="bot_chat_control.php"><button type="button"  class="btn btn-danger btn-md w-100"><i class="fas fa-link"></i> เพิ่มการตอบกลับ แบบปุ่มกด</button></a></p>
                    <p class="card-text"><button type="button" class="btn btn-dark btn-md w-100"><i class="fas fa-trash"></i> ลบการตอบกลับ</button></p>
                </div>
                </div>
                <div class="pt-3"></div>
                <div class="card" style="max-width: 500px; border:0;box-shadow: 0 4px 8px 0 rgba(0,0,0,0.5);">
                <div class="card-header bg-primary text-white h5"><i class="fab fa-facebook-f"></i> Facebook</div>
                    <div class="card-body p-0 m-0" style="height:130px;">
                        <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fnanydesignpage&tabs&width=500&height=130&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=false&appId" height="130" style="border:none;overflow:hidden;width:100%;" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                    </div>

                </div><div class="pb-5"></div>
            </div>
            
            <div class="col-lg-8">
                <div class="card bg-light w-100" style="border:0;box-shadow: 0 4px 8px 0 rgba(0,0,0,0.5);">
                    <div class="card-header bg-primary text-white h5"><b><i class="fas fa-cog"></i> รูปแบบการตอบกลับ</b></div>
                    <div class="card-body p-0" style="height:435px;max-height:435px;overflow: scroll;">
                    
                    <div id="del" style="display:block;">
                    
                    <div id="delete"></div>


                    </div>


                    </div>
                    </div>
                </div>
            </div>

            
        </div>
    </div>
    <div class="pb-5"></div>


<script type="text/javascript">
$(function(){
	setInterval(function(){ 

		var getData=$.ajax({ 
				url:"delete.php",
				data:"rev=1",
				async:false,
				success:function(getData){
					$("div#delete").html(getData); 
				}
		}).responseText;
	},1000);
});
</script>

<?php include ('insert_q.php'); ?>
</body>
</html>