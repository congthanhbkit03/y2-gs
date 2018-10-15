<?php 
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use frontend\assets\AppAsset; 
use frontend\models\Caphoc;
use frontend\models\Monhoc;
use frontend\models\Khuvuc;
use frontend\models\Lopday;
use yii\helpers\ArrayHelper;
$hinhanh = AppAsset::register($this)->baseUrl . '/frontend/web/img';
?>
<div class="row">
  <div class="col-md-12">
    <div class="slider-content">
      <div class="row">
          <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12">
             
            <div class="search-form wow pulse" data-wow-delay="0.8s">

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
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
  
