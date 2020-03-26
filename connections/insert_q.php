<?php

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "addtext_q")) {

    $ques = $_POST['text_q'];
    $ans = $_POST['text_a'];
    $check = "SELECT * FROM bot_answer WHERE b_question = '$ques'";
    $result = mysqli_query($conn,$check);
    $num = mysqli_num_rows($result); 
    if($num > 0){

        echo '<script>
             swal({
                title: "มีคำถามนี้ในระบบแล้ว!",
                text: "ยกเลิกเพิ่มการตอบกลับแล้ว...",
                icon: "error",
                button: "OK",
            });
            </script>';

    } else {

        $questtext = $ques;
        $sql = "INSERT INTO bot_answer ( b_question, answer, q_type) VALUES ('".$questtext."','".$ans."','text')";
        $query = mysqli_query($conn,$sql);

        if($query) {
			echo '<script>
					swal({
						title: "เพิ่มการตอบกลับ แบบข้อความ สำเร็จ!",
						text: "เพิ่มการตอบกลับแล้ว...",
						icon: "success",
						button: "OK",
					});
				</script>';
        }

    }
}


?>


<?php

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "addimage_q")) {
    error_reporting(0);
    $ques = $_POST['image_q'];
    $ans = $_POST['image_a'];
    $check = "SELECT * FROM bot_answer WHERE b_question = '$ques'";
    $result = mysqli_query($conn,$check);
    $num = mysqli_num_rows($result); 
    if($num > 0){

        echo '<script>
             swal({
                title: "มีคำถามนี้ในระบบแล้ว!",
                text: "ยกเลิกเพิ่มการตอบกลับแล้ว...",
                icon: "error",
                button: "OK",
            });
            </script>';

    } else {

        $questtext = $ques;
        $warp = md5(rand());

        $sql = "INSERT INTO bot_answer ( b_question, answer, q_type, warp_tb) VALUES ('".$questtext."','".$ans."','image','".$warp."')";
        $query = mysqli_query($conn,$sql);

        function Upload($file,$path="../assets/img/image_answer/"){
            $namea = md5(rand()).".jpg";
            $newfilename= $namea.str_replace("", "", basename($_FILES["file"]["name"]));
            if(@copy($file['tmp_name'],$path.$newfilename)){
                @chmod($path.$file,0777);
                return $newfilename;
            }else{
                return false;
            }
        }

        $imagefile = Upload($_FILES['image_img']);
        $sql = "INSERT INTO image_type ( i_question, i_answer, q_image, i_tb) VALUES ('".$questtext."','".$ans."', '$imagefile' ,'".$warp."')";
        $query_img = mysqli_query($conn,$sql);

        if($query_img) {
			echo '<script>
					swal({
						title: "เพิ่มการตอบกลับ แบบรูปภาพ สำเร็จ!",
						text: "เพิ่มการตอบกลับแล้ว...",
						icon: "success",
						button: "OK",
					});
				</script>';
        }

    }
}


?>




<?php

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "addbtn_q")) {

    $ques = $_POST['btn_q'];
    $ans = $_POST['btn_a'];
    $check = "SELECT * FROM bot_answer WHERE b_question = '$ques'";
    $result = mysqli_query($conn,$check);
    $num = mysqli_num_rows($result); 
    if($num > 0){

        echo '<script>
             swal({
                title: "มีคำถามนี้ในระบบแล้ว!",
                text: "ยกเลิกเพิ่มการตอบกลับแล้ว...",
                icon: "error",
                button: "OK",
            });
            </script>';

    } else {
        $warp = md5(rand());
        $questtext = $ques;
        $sql = "INSERT INTO bot_answer ( b_question, answer, q_type, warp_tb) VALUES ('".$questtext."','".$ans."','button','".$warp."')";
        $query = mysqli_query($conn,$sql);

        $txt = $_POST['btn_t']; $link = $_POST['btn_l']; $icon = $_POST['btn_i']; $color = $_POST['btn_c'];
        $sql = "INSERT INTO button_type ( bt_question, btn_answer, btn_txt, btn_url, btn_icon, btn_color, btn_tb) VALUES ('".$questtext."','".$ans."','$txt','$link','$icon','$color' ,'".$warp."')";
        $query_img = mysqli_query($conn,$sql);
        if($query) {
			echo '<script>
					swal({
						title: "เพิ่มการตอบกลับ แบบปุ่มกด สำเร็จ!",
						text: "เพิ่มการตอบกลับแล้ว...",
						icon: "success",
						button: "OK",
					});
				</script>';
        }

    }
}


?>


<?php

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "del_q")) {
    $deltype = $_POST['codetype'];
    $tbtype = $_POST['codetb'];
    if($deltype == 'text'){
    $delid = $_POST['codeid'];
    $sql = "DELETE FROM bot_answer WHERE answer_id = '$delid'";
    $query = mysqli_query($conn,$sql);
    } elseif($deltype == 'image'){
        $sql = "DELETE FROM bot_answer WHERE warp_tb = '$tbtype'";
        $query = mysqli_query($conn,$sql); 
        $sql_img = "DELETE FROM image_type WHERE i_tb = '$tbtype'";
        $query = mysqli_query($conn,$sql_img); 
    } elseif($deltype == 'button'){
        $sql = "DELETE FROM bot_answer WHERE warp_tb = '$tbtype'";
        $query = mysqli_query($conn,$sql); 
        $sql_btn = "DELETE FROM button_type WHERE btn_tb = '$tbtype'";
        $query = mysqli_query($conn,$sql_btn); 
    } else {
        echo '<script>
        swal({
            title: "เกิดข้อผิดพลาด!",
            text: "การลบการตอบกลับล้มเหลว...",
            icon: "error",
            button: "OK",
        });
        </script>';
    }
    echo '<script>
    swal({
        title: "ลบการตอบกลับสำเร็จ!",
        text: "ลบการตอบกลับแล้ว...",
        icon: "error",
        button: "OK",
    });
    </script>';
}
	?>