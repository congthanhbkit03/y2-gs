<?php 
use frontend\models\Monhoc;
use frontend\models\Caphoc;
use frontend\models\Khuvuc;
$hinhanh = Yii::getAlias('@web') . '/img/'; ?>


<div class="panel panel-default sidebar-menu wow fadeInRight animated" >
    <div class="panel-heading">
        <h3 class="panel-title">Tìm kiếm</h3>
    </div>
    <div class="panel-body search-widget">
        <form action="<?= Yii::$app->homeUrl?>lopday/search" method="post" class=" form-inline">
            <input type="hidden" name="_csrf" value="<?=Yii::$app->request->getCsrfToken()?>" />
            
            
            <div class="form-group">    
              <?php
                $dataHuyen = Khuvuc::find()->asArray()->all();
                
              ?>                              
                <select id="slkv" name="slkv" class="selectpicker show-tick form-control ">
                    <option value=""> - Chon Khu vuc - </option>
                    <?php foreach ($dataHuyen as $huyen) { ?>

                      <option value="<?=$huyen['id']?>"><?=$huyen['khuvuc']?></option>
                    <?php } ?>
                    
                    
                </select>
            </div>

            <div class="form-group">    
                <?php $dataCH = Caphoc::find()->asArray()->all(); ?>                                 
                <select name = "slch" id="slch" class="selectpicker show-tick form-control" >
                    <option value=""> - Chon Cap hoc - </option>
                  <?php foreach ($dataCH as $ch) { ?>
                    
                    <option value="<?=$ch['id']?>"><?=$ch['caphoc']?> </option>
                    
                  <?php } ?>
                </select>
            </div>
            
            <div class="form-group">    
                <?php $dataMH = Monhoc::find()->asArray()->all(); ?>                                 
                <select name = "slmh" id="slmh" class="selectpicker show-tick form-control" >
                    <option value=""> - Chon Mon hoc - </option>
                  <?php foreach ($dataMH as $mh) { ?>
                    
                    <option value="<?=$mh['id']?>"><?=$mh['monhoc']?> </option>
                    
                  <?php } ?>
                </select>
            </div>

            <button class="btn search-btn" type="submit"><i class="fa fa-search"></i></button> 
        </form>

        <h2>Kết quả tìm kiếm</h2>
        <!-- ket qua hien thi o day -->
        <?php foreach ($data as $ld) { ?>
            <div class="col-md-6">
                <div class="panel panel-primary">
                  <div class="panel-heading">
                    <h3 class="panel-title"><?=$ld->khuvuc->khuvuc;?></h3>
                  </div>
                  <div class="panel-body">
                    
                    <strong>Lớp dạy :</strong> <?=$ld->caphoc->caphoc;?><br>
                    <strong>Môn dạy:</strong><?=$ld->monhoc->monhoc;?> <br>
                    <strong>Địa chỉ:</strong><?=$ld->diachi?>  <a rel="nofollow" target="_blank" href="https://maps.google.com/maps?q=<?=$ld['diachi']?>&amp;hl=vi&amp;ie=UTF8"><i style="color:blue">(Xem bản đồ)</i></a><br>
                    <strong>Mức lương:</strong> <span style="color:#F00; font-weight:bold"><?=$ld->mucluong?></span> đồng/tháng<br>
                    <strong>Số buổi:</strong> <?=$ld->sobuoi?> (1b=2h) Buổi/Tuần<br>
                    <strong>Thời gian dạy:</strong><?=$ld->thoigian?> <br><strong>Yêu cầu:</strong><?=$ld->yeucau?> <br>
                    <strong>Liên hệ:</strong> <span style="color:#F00; font-weight:bold"> <a href="tel:0902929127" title="Gọi 0902929127" style="color:#F00; font-weight:bold">0902929127</a> - <a href="tel:0907971009" title="Gọi 0907971009" style="color:#F00; font-weight:bold">0907971009</a></span>
                
                
                
                  </div>
                </div>
            </div>
        <?php } ?>


    </div>
    
</div>



