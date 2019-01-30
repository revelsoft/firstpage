

<div class="row">
  <div class="col-lg-12">
    <div>
     <h1>ระบบจัดการเทรนด์สินค้า</h1>
     <h2>เพิ่ม ลบ เเก้ไข เทรนด์สินค้า</h2> 
     <div align=right>
      <a href="?content=trend_product&action=insert">
        <input class="button" type="submit" value="เพิ่ม">
      </a>
    </div> 
  </div>
  <table>
    <thead>
      <tr>
        <th>#</th>
        <th width="10%">รูปภาพ</th>   
        <th width="30%">ชื่อเทรนด์สินค้า</th>   
        <th>เเก้ไข</th>
        <th>ลบ</th>
      </tr>
    </thead>
    <tbody>
      <?php 
      for($i=0; $i < count($trend_product); $i++){
        ?>
        <tr>
          <td><?php echo $i+1; ?></td> 
          <td>
            <div align="center">
              <img  class="img-fluid" src="../img_upload/trend_product/<?php if($trend_product[$i]['trend_product_img'] != "") echo $trend_product[$i]['trend_product_img']; else echo "default.png" ?>" height="72" width="auto"/>  
            </div>
          </td>  
          <td><?php echo $trend_product[$i]['trend_product_title']; ?></td>   
          <td> 
            <a href="?content=trend_product&action=update&id=<?php echo $trend_product[$i]['trend_product_id'];?>" style="font-size: 20px;">
              <i class="fa fa-pencil-square-o" aria-hidden="true" ></i>
            </a> 
          </td> 
          <td>  
            <a href="?content=trend_product&action=delete&id=<?php echo $trend_product[$i]['trend_product_id'];?>" onclick="return confirm('คุณต้องการลบเทรนด์สินค้า <?echo $trend_product[$i]['trend_product_title']; ?> ?');" style="color:red; font-size: 20px;">
              <i class="fa fa-times" aria-hidden="true"></i>
            </a> 
          </td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</div> 

