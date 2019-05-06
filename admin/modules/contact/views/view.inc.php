

<div class="row">
  <div class="col-lg-12">
    <div>
     <h1>ระบบจัดการติดต่อเรา</h1> 
     
  </div>
  <table>
    <thead>
      <tr>
        <th>#</th>
        <th >ชื่อผู้ติดต่อ</th>   
        <th >อีเมล</th>     
      </tr>
    </thead>
    <tbody>
      <?php 
      for($i=0; $i < count($contact); $i++){
        ?>
        <tr>
          <td><?php echo $i+1; ?></td>  
          <td><?php echo $contact[$i]['contact_name']; ?></td>     
          <td><?php echo $contact[$i]['contact_email']; ?></td>    
        </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</div> 

