<script>
    function check(){


        var home_slide_img = document.getElementById("home_slide_img").value;  
        
        home_slide_img = $.trim(home_slide_img);  
        
        if(home_slide_img.length == 0){
            alert("กรุณาเลือกรูปภาพ");
            document.getElementById("home_slide_img").focus();
            return false;  
        }else{
            return true;
        }
    }

    function readURL(input,id) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#img_'+id).attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }else{
            $('#img_'+id).attr('src', '../img_upload/home_slide/default.png');
        }
    }

</script>

<div class="row">
    <div class="col-lg-6">
        <h1>แก้ไขเทรนด์สินค้า</h1>
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
                <form role="form" method="post" onsubmit="return check();" action="index.php?content=home_slide&action=edit" enctype="multipart/form-data">
                    <input type="hidden"  id="home_slide_id" name="home_slide_id" value="<?php echo $home_slide['home_slide_id']; ?>" />
                    <input type="hidden"  id="home_slide_img_o" name="home_slide_img_o" value="<?php echo  $home_slide['home_slide_img'] ;?>" />
                     
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="form-group" >
                                <label>รูปเทรนด์สินค้า </label>
                                <img id="img_home_slide_img" src="../img_upload/home_slide/<?php echo $home_slide['home_slide_img']; ?>" class="img-fluid shadows hoverable"  > 
                                <input accept=".jpg , .png" type="file" id="home_slide_img" name="home_slide_img" class="form-control" style="" onChange="readURL(this,'home_slide_img');">
                            </div>
                        </div> 
                    </div> 

                    <div align="right">
                        <button type="button" class="btn btn-default" onclick="window.location='?content=home_slide';" >ย้อนกลับ</button>
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