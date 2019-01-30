<script>
    function check(){
       
        var about_detail = document.getElementById("about_detail").value;

        about_detail = $.trim(about_detail); 

        if(about_detail.length == 0){
            alert("กรุณากรอกรายละเอียด");
            document.getElementById("about_detail").focus();
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
                <form role="form" method="post" onsubmit="return check();" action="index.php?content=about&action=edit&id=<?PHP echo $about['about_id']; ?>" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-lg-9">
                            <div class="row">  
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>รายละเอียด </label> 
                                        <textarea id="about_detail" name="about_detail" class="form-control" style="min-height: 500px;"/><?PHP echo $about['about_detail']; ?></textarea>
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
                        <input type="hidden" id="about_id" name="about_id" class="form-control" value="<?php echo $about['about_id']?>"> 
                        <button type="button" class="btn btn-default" onclick="window.location='?content=about';" >ย้อนกลับ</button>
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