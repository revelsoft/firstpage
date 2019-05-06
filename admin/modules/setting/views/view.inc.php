<script>
    function check(){
        var setting_tel = document.getElementById("setting_tel").value;
        var setting_address = document.getElementById("setting_address").value;
        var setting_email = document.getElementById("setting_email").value;

        setting_tel = $.trim(setting_tel);
        setting_address = $.trim(setting_address);
        setting_email = $.trim(setting_email);

        if(setting_tel.length == 0){
            alert("กรุณาระบุหมายเลขโทรศัพท์");
            document.getElementById("setting_tel").focus();
            return false;
        }else if(setting_address.length == 0){
            alert("กรุณาระบุตำเเหน่งที่ตั้ง");
            document.getElementById("setting_address").focus();
            return false;
        }else if(setting_email.length == 0){
            alert("กรุณาระบุอีเมล");
            document.getElementById("setting_email").focus();
            return false;
        }else{
            return true;
        }
    }

 
</script>

<div class="row">
    <div class="col-lg-6">
        <h1>ตั้งค่าเว็ปไซต์</h1>
    </div>
    <div class="col-lg-6" align="right">

    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <!-- /.panel-heading -->
            <div class="panel-body">
                <form role="form" method="post" onsubmit="return check();" action="index.php?content=setting&action=edit&id=<?PHP echo $setting['setting_id']; ?>" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-lg-9">
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="form-group">
                                        <label>โทรศัพท์ <font color="#F00"><b>*</b></font></label>
                                        <input id="setting_tel" name="setting_tel" class="form-control" value="<?php echo $setting['setting_tel']?>">
                                    </div>
                                </div> 
                                <div class="col-lg-8">
                                    <div class="form-group">
                                        <label>ตำเเหน่งที่ตั้ง <font color="#F00"><b>*</b></font></label>
                                        <input id="setting_address" name="setting_address" class="form-control" value="<?php echo $setting['setting_address']?>">
                                    </div>
                                </div> 
                                <div class="col-lg-8">
                                    <div class="form-group">
                                        <label>อีเมล <font color="#F00"><b>*</b></font></label>
                                        <input id="setting_email" name="setting_email" class="form-control" value="<?php echo $setting['setting_email']?>">
                                    </div>
                                </div> 
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.col-lg-9 (nested) -->

                        <div class="col-lg-3">
                             
                        </div>
                        <!-- /.col-lg-3 (nested) -->
                    </div>
                    <!-- /.row (nested) -->
                   <div align="right">
                        <input type="hidden" id="setting_id" name="setting_id" class="form-control" value="<?php echo $setting['setting_id']?>"> 
                        <button type="button" class="btn btn-default" onclick="window.location='?content=setting';" >ย้อนกลับ</button>
                        <button type="reset" class="btn btn-primary">ล้างข้อมูล</button>
                        <button type="submit" class="btn btn-success">บันทึกข้อมูล</button>
                    </div>
                    <!-- /.row (nested) -->
                </form>
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>