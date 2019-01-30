<?PHP 
require_once('models/TrendProductModel.php');    
$trend_product_model = new TrendProductModel;   
$trend_product = $trend_product_model->getTrendProductBy(); 
?>
<div style="padding: 5% 10%;">
    <div class="text-center">
        <div class="text-header-medium">
            TRENDING PRODUCTS
        </div>
        <div class="text-detail" style="padding: 3.5% 20%;">
            this is photo shop' version of Lorem Ipsum. Proin gravida nibh vel velist auctor aliquet Aenean sollicitudin. lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis.
        </div>
            
        <div class="row">
            <?PHP for($i=0;$i<count($trend_product );$i++){ ?> 
                <div class="col-md-4">
                    <img src="img_upload/trend_product/<?PHP echo $trend_product[$i]['trend_product_img'];?>" style="width: 90%;" alt="<?PHP echo $trend_product[$i]['trend_product_title'];?>">
                    <div class="text-header-regular" style="padding: 50px 0;">
                    <?PHP echo $trend_product[$i]['trend_product_title'];?>
                    </div>
                </div>
            <?PHP } ?>  
        </div>
    </div>
</div>
<?PHP 
require_once('models/ProductModel.php');    
$product_model = new ProductModel;   
$product = $product_model->getProductBy(); 
?>
<div style="padding: 5% 10%;">
    <div class="text-center">
        <div class="text-header-medium">
            POPULAR PRODUCTS
        </div>
        <div class="text-detail" style="padding: 3.5% 20%;">
            this is photo shop' version of Lorem Ipsum. Proin gravida nibh vel velist auctor aliquet Aenean sollicitudin. lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis.
        </div>

        <div class="row">
            <?PHP for($i=0;$i<count($product );$i++){ ?> 
                <div class="col-md-4">
                <img src="img_upload/product/<?PHP echo $product[$i]['product_img'];?>" style="width: 90%;" alt="<?PHP echo $product[$i]['product_name'];?>">
                <div class="text-regular" style="padding-top: 48px;">
                <?PHP echo $product[$i]['product_name'];?>
                </div>
                <div class="text-regular" style="padding: 16px 0px; color: #c6c6c6;">
                <?php echo number_format($product[$i]['product_price']); ?> ฿
                </div>
            </div>
            <?PHP } ?>  
          
        </div>
    </div>
</div>