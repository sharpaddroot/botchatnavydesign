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
    $sql = "SELECT * FROM bot_answer ORDER BY answer_id DESC";
    $query = mysqli_query($conn,$sql);
    $data = mysqli_fetch_assoc($query);
?>
</head>
<body>
<table class="table table-striped text-center">
  <thead  class="thead-dark">
    <tr>
      <th scope="col">ประเภท</th>
      <th scope="col">คำถาม</th>
      <th scope="col">ควบคุม</th>
    </tr>
  </thead>
  <tbody style="height:435px;max-height:435px;overflow: scroll; ">
<?php do { ?>
    <tr>
      <th scope="row"><?php echo $data['q_type'] ?></th>
      <td><?php echo $data['b_question'] ?></td>
      <td>
      <form method="POST">
      <input type="text" style="display: none;" name="codetb" value="<?php echo $data['warp_tb'] ?>"/>
      <input type="text" style="display: none;" name="codetype" value="<?php echo $data['q_type'] ?>"/>
		<input type="text" style="display: none;" name="codeid" value="<?php echo $data['answer_id'] ?>"/>
		<button  type="submit" class="btn btn-sm btn-danger w-100">ลบ</button>
	    <input type="hidden" name="MM_insert" value="del_q">
     </form>
      </td>
    </tr>
        
<?php }while ($data = mysqli_fetch_assoc($query)); ?>
</tbody>
</table>
</body>
<html>