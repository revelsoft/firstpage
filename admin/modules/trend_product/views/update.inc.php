<script>
    function check(){


        var trend_product_title = document.getElementById("trend_product_title").value; 
        var trend_product_detail = document.getElementById("trend_product_detail").value; 
 
        
        trend_product_title = $.trim(trend_product_title); 
        trend_product_detail = $.trim(trend_product_detail); 
        
        if(trend_product_title.length == 0){
            alert("กรุณากรอกชื่อเทรนด์สินค้า");
            document.getElementById("trend_product_title").focus();
            return false; 
        }else if(trend_product_detail.length == 0){
            alert("กรุณากรอกรายละเอียดสินค้า");
            document.getElementById("trend_product_detail").focus();
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
            $('#img_'+id).attr('src', '../img_upload/trend_product/default.png');
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
                <form role="form" method="post" onsubmit="return check();" action="index.php?content=trend_product&action=edit" enctype="multipart/form-data">
                    <input type="hidden"  id="trend_product_id" name="trend_product_id" value="<?php echo $trend_product['trend_product_id']; ?>" />
                    <input type="hidden"  id="trend_product_img_o" name="trend_product_img_o" value="<?php echo  $trend_product['trend_product_img'] ;?>" />
                    <div class="row">  
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label>ชื่อเทรนด์สินค้า <font color="#F00"><b>*</b></font></label>
                                <input id="trend_product_title" name="trend_product_title" class="form-control" value="<?php echo $trend_product['trend_product_title'];?>" >
                            </div>
                        </div>   
                        
                    </div> 

                    <div class="row">
                        <div class="col-lg-3">
                            <div class="form-group" >
                                <label>รูปเทรนด์สินค้า </label>
                                <img id="img_trend_product_img" src="../img_upload/trend_product/<?php echo $trend_product['trend_product_img']; ?>" class="img-fluid shadows hoverable"  > 
                                <input accept=".jpg , .png" type="file" id="trend_product_img" name="trend_product_img" class="form-control" style="" onChange="readURL(this,'trend_product_img');">
                            </div>
                        </div> 
                    </div>
                    <div class="row">    
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>รายละเอียด </label> 
                                <textarea id="trend_product_detail" name="trend_product_detail" class="form-control" style="min-height: 200px;"/><?php echo $trend_product['trend_product_detail'];?></textarea>
                            </div>
                        </div> 
                    </div> 

                    <div align="right">
                        <button type="button" class="btn btn-default" onclick="window.location='?content=trend_product';" >ย้อนกลับ</button>
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