<?PHP 
require_once('models/SettingModel.php');    
$setting_model = new SettingModel;   
$setting = $setting_model->getSettingByID('1'); 
?>
<footer>
    <div class="row">
        <div class="col-md-4 footer-panel">
            <div class="text-header-medium">
                CALL US NOW
            </div>
            <div style="font-size: 2.5rem;">
                <?PHP echo $setting['setting_tel'];?>
            </div>
        </div>
        <div class="col-md-4 footer-panel">
            <div class="text-header-medium">
                COME VISIT US
            </div>
            <div style="font-size: 0.95rem;">
                <?PHP echo $setting['setting_address'];?>
            </div>
        </div>
        <div class="col-md-4 footer-panel">
            <div class="text-header-medium">
                SEND A MESSENGE
            </div>
            <div>
                <?PHP echo $setting['setting_email'];?>
            </div>
        </div>
    </div>

    <div class="text-center" style="padding-top: 3.5em;">
        2018 @ Revelsoft Co., Ltd. Design in nakhonratchasima, Thailand.
    </div>
</footer>