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
                    <p class="card-text"><button type="button" onClick="usetext()" class="btn btn-primary btn-md w-100"><i class="fas fa-italic"></i> เพิ่มการตอบกลับ แบบข้อความ</button></p>
                    <p class="card-text"><button type="button" onClick="useimage()" class="btn btn-success btn-md w-100"><i class="fas fa-image"></i> เพิ่มการตอบกลับ แบบรูปภาพ</button></p>
                    <p class="card-text"><button type="button" onClick="usebutton()" class="btn btn-danger btn-md w-100"><i class="fas fa-link"></i> เพิ่มการตอบกลับ แบบปุ่มกด</button></p>
                    <p class="card-text"><a href="bot_delete.php"><button type="button" class="btn btn-dark btn-md w-100"><i class="fas fa-trash"></i> ลบการตอบกลับ</button></a></p>
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
                    <div id="text" class="p-3" style="display:block;">
                    <form method="POST">
                        <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">คำถาม : </span>
                        </div>
                            <input type="text" class="form-control" name="text_q" placeholder="กรุณาป้อนคำถาม" required/>
                        </div>
                        <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">คำตอบ : </span>
                        </div>
                            <input type="text" class="form-control" name="text_a" placeholder="กรุณาป้อนคำตอบ" required/>
                        </div>
                        <p class="card-text"><button type="submit" class="btn btn-primary btn-md w-100"><i class="fas fa-italic"></i> เพิ่มการตอบกลับ แบบข้อความ</button></p>
                        <input type="hidden" id="MM_insert" name="MM_insert" value = "addtext_q">
                    </form>
                    </div>

                    <div id="image" class="p-3" style="display:none;">
                    <form method="POST" enctype="multipart/form-data">
                        <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">คำถาม : </span>
                        </div>
                            <input type="text" class="form-control" name="image_q" placeholder="กรุณาป้อนคำถาม" required/>
                        </div>
                        <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">คำตอบ : </span>
                        </div>
                            <input type="text" class="form-control" name="image_a" placeholder="กรุณาป้อนคำตอบ" required/>
                        </div>
                        <div class="custom-file">
                            <input type="file" id="image_img" name="image_img" accept=".jpg,.png" required/>
                            <label class="custom-file-label" for="image_img">เลือกไฟล์ที่ต้องการ</label>
                        </div>
                        <p class="card-text pt-3"><button type="submit" class="btn btn-success btn-md w-100"><i class="fas fa-image"></i> เพิ่มการตอบกลับ แบบรูปภาพ</button></p>
                        <input type="hidden" id="MM_insert" name="MM_insert" value = "addimage_q">
                    </form>
                    </div>

                    <div id="button" class="p-3" style="display:none;">
                    <form method="POST">
                        <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">คำถาม : </span>
                        </div>
                            <input type="text" class="form-control" name="btn_q" placeholder="กรุณาป้อนคำถาม" required/>
                        </div>
                        <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">คำตอบ : </span>
                        </div>
                            <input type="text" class="form-control" name="btn_a" placeholder="กรุณาป้อนคำตอบ" required/>
                        </div>
                        <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Link : </span>
                        </div>
                            <input type="text" class="form-control" name="btn_l" placeholder="กรุณาป้อนLink" required/>
                        </div>
                        <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Icon : </span>
                        </div>
                            <input type="text" class="form-control" name="btn_i" placeholder="กรุณาป้อนIcon" required/>
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">ตัวอักษรบนปุ่ม : </span>
                        </div>
                            <input type="text" class="form-control" name="btn_t" placeholder="กรุณาป้อนตัวอักษรบนปุ่ม" required/>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputGroupSelect01">สีของปุ่ม</label>
                            </div>
                            <select class="custom-select" id="inputGroupSelect01" name="btn_c" required />
                            <option  value="#333" selected>กรุณาเลือกสีของปุ่ม</option>
                                <option class="text-white" style="background-color:#428BCA;" value="#428BCA">#428BCA</option>
                                <option class="text-white" style="background-color:#DC3545;" value="#DC3545">#DC3545</option>
                                <option class="text-white" style="background-color:#28a745;" value="#28a745">#28a745</option>
                                <option class="text-white" style="background-color:#343a40;" value="#343a40">#343a40</option>
                                <option class="text-white" style="background-color:#7289DA;" value="#7289DA">#7289DA</option>
                                <option class="text-white" style="background-color:#9C1B31;" value="#9C1B31">#9C1B31</option>
                                <option class="text-white" style="background-color:#109675;" value="#109675">#109675</option>
                                <option class="text-white" style="background-color:#F1C059;" value="#F1C059">#F1C059</option>
                                <option class="text-white" style="background-color:#F36F63;" value="#F36F63">#F36F63</option>
                                <option class="text-white" style="background-color:#50B0AE;" value="#50B0AE">#50B0AE</option>
                                <option class="text-white" style="background-color:#00294D;" value="#00294D">#00294D</option>
                                <option class="text-white" style="background-color:#698EFF;" value="#698EFF">#698EFF</option>
                                <option class="text-white" style="background-color:#00ED96;" value="#00ED96">#00ED96</option>
                                <option class="text-white" style="background-color:#FF3B5F;" value="#FF3B5F">#FF3B5F</option>
                                <option class="text-white" style="background-color:#F28D9F;" value="#F28D9F">#F28D9F</option>
                                <option class="text-white" style="background-color:#024034;" value="#024034">#024034</option>
                                <option class="text-white" style="background-color:#590B3E;" value="#590B3E">#590B3E</option>
                                <option class="text-white" style="background-color:#A6216A;" value="#A6216A">#A6216A</option>
                                <option class="text-white" style="background-color:#F27405;" value="#F27405">#F27405</option>
                                <option class="text-white" style="background-color:#F20544;" value="#F20544">#F20544</option>
                            </select>
                        </div>
                        <p class="card-text"><button type="submit" class="btn btn-danger btn-md w-100"><i class="fas fa-link"></i> เพิ่มการตอบกลับ แบบปุ่มกด</button></p>
                        <input type="hidden" id="MM_insert" name="MM_insert" value = "addbtn_q">
                    </form>
                    <span>เว็บที่ใช้หา ICON : <a href="https://fontawesome.com/icons?d=gallery" target="_blank">คลิ๊กเพื่อเปิด Font Awesome Icon</a></span>
                    </div>


                    </div>
                    </div>
                </div>
            </div>

            
        </div>
    </div>
    <div class="pb-5"></div>


 <?php include ('insert_q.php'); ?>
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
	},1500);
});
</script>
<script type="text/javascript">
$(function(){
 
    $("#image_img").on("change",function(){
        var _fileName = $(this).val();
        $(this).next("label").text(_fileName);
    });
 
});
</script>
<script>
		function usetext() {
            document.getElementById('image').style.display = "none";
            document.getElementById('button').style.display = "none";
            document.getElementById('text').style.display = "block";

		}
		function useimage() {
            document.getElementById('image').style.display = "block";
            document.getElementById('button').style.display = "none";
            document.getElementById('text').style.display = "none";

        }
		function usebutton() {
            document.getElementById('image').style.display = "none";
            document.getElementById('button').style.display = "block";
            document.getElementById('text').style.display = "none";

        }
</script>
</body>
</html>