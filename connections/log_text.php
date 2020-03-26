
<?php require_once('botconnect.php') ?>
<?php
    $sql = "SELECT * FROM log ORDER BY id DESC LIMIT 30";
    $query = mysqli_query($conn,$sql);
    $log = mysqli_fetch_assoc($query);
?>
<?php do { ?>
<tr>
    <td style="width:10%;"><a href="#" class="badge badge-success">มีการส่งข้อความ</a></td>
    <td style="width:70%;"><?php if(strlen($log['text_log']) > 80){ echo 'ขอความยาวเกินไป...';}else {echo $log['text_log'];} ?> <span class="text-primary"><b>#<?php echo $log['tag']; ?></b></span></td>
    <td style="width:20%;">เวลา : <?php echo $log['date_log']; ?></td>
</tr>
<?php }while ($log = mysqli_fetch_assoc($query)); ?>
