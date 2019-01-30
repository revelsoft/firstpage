
<div class="row">
  <div class="col-lg-12">
    <div>
     <h1>ระบบจัดการสไลด์</h1>
     <h2>เพิ่ม ลบ เเก้ไข สไลด์</h2> 
     <div align=right>
      <a href="?content=home_slide&action=insert">
        <input class="button" type="submit" value="เพิ่ม">
      </a>
    </div> 
  </div>
  <table>
    <thead>
      <tr>
        <th>#</th>
        <th width="10%">รูปภาพ</th>    
        <th>เเก้ไข</th>
        <th>ลบ</th>
      </tr>
    </thead>
    <tbody>
      <?php 
      for($i=0; $i < count($home_slide); $i++){
        ?>
        <tr>
          <td><?php echo $i+1; ?></td> 
          <td>
            <div align="center">
              <img  class="img-fluid" src="../img_upload/home_slide/<?php if($home_slide[$i]['home_slide_img'] != "") echo $home_slide[$i]['home_slide_img']; else echo "default.png" ?>" height="72" width="auto"/>  
            </div>
          </td>  
          <td> 
            <a href="?content=home_slide&action=update&id=<?php echo $home_slide[$i]['home_slide_id'];?>" style="font-size: 20px;">
              <i class="fa fa-pencil-square-o" aria-hidden="true" ></i>
            </a> 
          </td> 
          <td>  
            <a href="?content=home_slide&action=delete&id=<?php echo $home_slide[$i]['home_slide_id'];?>" onclick="return confirm('คุณต้องการลบเทรนด์สินค้า <?echo $home_slide[$i]['home_slide_title']; ?> ?');" style="color:red; font-size: 20px;">
              <i class="fa fa-times" aria-hidden="true"></i>
            </a> 
          </td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</div> 

