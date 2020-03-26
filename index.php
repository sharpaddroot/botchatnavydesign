<?php include ('connections/head.php'); ?>

<div class="container pt-4">
<h2 class="text-center"><b><div class="badge badge-dark pt-3 pb-3 text-wrap w-100"><u>BOT CHAT By NAVy DESIGn</u></div></b></h2>
    <div class="container pt-2"></div>
    <div class="row">

        <div class="col-lg-4 pr-3">
            <div class="card bg-light mb-3" style="border:0;box-shadow: 0 4px 8px 0 rgba(0,0,0,0.5);">
                <div class="card-header bg-primary text-white h5 pt-4"><b><i class="fas fa-code"></i> คำถามที่จะมีการตอบกลับ</b></div>
                <div class="card-body" style="height:573px; max-height: 573px; overflow: scroll;">
                    <div id="question_list"></div>
                </div>
            </div>
        </div>

        <div class="col-lg-8">
            <div class="card bg-light mb-3" style="border:0;box-shadow: 0 4px 8px 0 rgba(0,0,0,0.5);">
                    <div class="card-header bg-primary text-white h5">
                        <form  method="POST">
                        <img src="assets/img/botprofile.jpg" style="border-radius: 100%; width:40px; height:40px; box-shadow: 0 4px 8px 0 rgba(0,0,0,0.5);"/>
                        <b> &nbsp;<?php echo $bot_name ?></b>
                            <button type="submit"  class="btn btn-danger btn-sm float-right p-2"><i class="fas fa-sync-alt" style="animation: rotateOut 1.5s infinite;" ></i> ล้างประวัติการพูดคุย</button>
                            <input type="hidden" id="MM_insert" name="MM_insert" value = "delmassage">
                        </form>
                    </div>
                    <div class="card-body bg-white" style="height:515px; max-height: 515px; overflow: scroll;">

                            <div class="pl-2 pt-1 row">
                                    <img src="assets/img/botprofile.jpg" style="border-radius: 100%;height:45px; width:45px; box-shadow: 0 4px 8px 0 rgba(0,0,0,0.5);"/>
                                    <div class="col-11">
                                        <div class="card  text-white bg-dark" style="max-width: 18rem;border-radius: 10px;padding-left:15px;padding-right:15px;box-shadow: 0 4px 8px 0 rgba(0,0,0,0.5);">
                                            <div class="card-title pt-2 text-white"><?php echo $welcome_text ?></div>
                                        </div>
                                    </div>
                                </div>

                                    <div id="showData"></div>
                        

                    </div>
                    <div class="card-footer bg-light p-2">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-text-height"></i></span>
                            </div>
                            <input id="msg" type="text" name="msg" class="form-control">
                            <div class="input-group-append">
                                <button id="msgbtn" class="btn btn-outline-primary"><i class="fas fa-paper-plane"></i> ส่งข้อความ</button>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
        
    </div>
</div>
<div class="container">
    <div class="row">
         <div class="col-lg-12 pr-3">
            <div class="card bg-light mb-0" style="border:0;box-shadow: 0 4px 8px 0 rgba(0,0,0,0.5);">
                <div class="card-header bg-primary text-white h5 pt-4"><b><i class="fas fa-terminal"></i> บันทึกการทำงาน</b></div>
                <div class="card-body p-2" style="height:120px; max-height: 120px; overflow: scroll;">
                <table class="table table-sm">
                    <tbody id="log_list">
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<span id="sent"></span>
    <div class="pb-5"></div>
<?php include ('connections/footer.php'); ?>