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
<?php do { ?>
    <p class="card-text"><li><?php echo $data['b_question']?></li></p>
<?php }while ($data = mysqli_fetch_assoc($query)); ?>
</body>
<html>