<div id="send"><span style="color:#00FF00;"><i class="fas fa-check"></i></span> ส่งข้อความแล้ว...</div>
<div id="senderror"><span style="color:#FE0000;"><i class="fas fa-times"></i></span> ข้อความว่าง...</div>

<script type="text/javascript">
$(function(){
		var getData=$.ajax({ 
				url:"connections/question_list.php",
				data:"rev=1",
				async:false,
				success:function(getData){
					$("div#question_list").html(getData); 
				}
		}).responseText;
});
</script>
<script type="text/javascript">
$(function(){
	setInterval(function(){ 

		var getData=$.ajax({ 
				url:"connections/log_text.php",
				data:"rev=1",
				async:false,
				success:function(getData){
					$("tbody#log_list").html(getData); 
				}
		}).responseText;
	},5000);
});
</script>
    <script type="text/javascript">
      $(document).ready(function() {
		var getData=$.ajax({
				url:"connections/show_massge.php",
				data:"rev=1",
				async:false,
				success:function(getData){
					$("div#showData").html(getData); 
				}
			}).responseText;
        var text = $("#msg").val();
        $("#msgbtn").click(function() {
          var text = $("#msg").val();
          var insert = "postmassage";
		  $("#sent").load("connections/addmsg.php", {newtext: text, MM_insert:insert});
		  var getData=$.ajax({
				url:"connections/show_massge.php",
				data:"rev=1",
				async:false,
				success:function(getData){
					$("div#showData").html(getData); 
				}
			}).responseText;
        });
      });
    </script>

<?php

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "delmassage")) {
		
			echo '<script>
					swal({
						title: "ล้างประวัติการพูดคุยสำเร็จ!",
						text: "ล้างประวัติการพูดคุยของคุณแล้ว...",
						icon: "error",
						button: "OK",
					});
				</script>';

				$sql = "DELETE FROM cloud_chat WHERE chat_id = '$cloud_chat1'";
				$query = mysqli_query($conn,$sql);
}


?>
</body>
</html>