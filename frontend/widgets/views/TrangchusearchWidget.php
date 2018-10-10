<?php 
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use frontend\assets\AppAsset; 
use frontend\models\Bds;
use frontend\models\Loaibds;
use frontend\models\District;
use yii\helpers\ArrayHelper;
$hinhanh = AppAsset::register($this)->baseUrl . '/frontend/web/img';
?>
<div class="row">
  <div class="col-md-12">
    <div class="slider-content">
      <div class="row">
          <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12">
             
            <div class="search-form wow pulse" data-wow-delay="0.8s">

                <form action="<?= Yii::$app->homeUrl?>bds/search" method="post" class=" form-inline">
                    <input type="hidden" name="_csrf" value="<?=Yii::$app->request->getCsrfToken()?>" />
                    
                    
                    <div class="form-group">    
                      <?php
                        $dataHuyen = District::find()->asArray()->where('provinceid=51')->all();
                        
                      ?>                              
                        <select id="slHuyen" name="slHuyen" class="selectpicker" data-live-search="true" data-live-search-style="begins" title="Chọn huyện">
                            <?php foreach ($dataHuyen as $huyen) { ?>

                              <option value="<?=$huyen['districtid']?>"><?=$huyen['name']?></option>
                            <?php } ?>
                            
                            
                        </select>
                    </div>

                    <div class="form-group">    
                        <?php $dataLoai = Loaibds::find()->asArray()->all(); ?>                                 
                        <select name = "slLoai" id="slLoai" class="selectpicker show-tick form-control" >
                            <option value=""> - Chon Mon hoc - </option>
                          <?php foreach ($dataLoai as $loai) { ?>
                            
                            <option value="<?=$loai['id']?>"><?=$loai['tenloai']?> </option>
                            
                          <?php } ?>
                        </select>
                    </div>
                    
                    <div class="form-group">    
                        <?php $dataLoai = Loaibds::find()->asArray()->all(); ?>                                 
                        <select name = "slLoai" id="slLoai" class="selectpicker show-tick form-control" >
                            <option value=""> - Chon Cap hoc - </option>
                          <?php foreach ($dataLoai as $loai) { ?>
                            
                            <option value="<?=$loai['id']?>"><?=$loai['tenloai']?> </option>
                            
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
  
