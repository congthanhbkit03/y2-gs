<?php 
use frontend\models\District;
use frontend\models\Loaibds;
$hinhanh = Yii::getAlias('@web') . '/img/'; ?>
<div class="page-head"> 
    <div class="container">
        <div class="row">
            <div class="page-head-content">
                <h1 class="page-title"><?=$dataloai['tenloai']?></h1>               
            </div>
        </div>
    </div>
</div>
<!-- End page header -->
<!-- property area -->
<div class="properties-area recent-property" style="background-color: #FFF;">
    <div class="container">  
        <div class="row">
             
        <div class="col-md-3 p0 padding-top-40">
            <div class="blog-asside-right pr0">
                <div class="panel panel-default sidebar-menu wow fadeInRight animated" >
                    <div class="panel-heading">
                        <h3 class="panel-title">Tìm kiếm BĐS</h3>
                    </div>
                    <div class="panel-body search-widget">
                        <form action="<?= Yii::$app->homeUrl?>bds/search" class=" form-inline" method="post"> 
                            <input type="hidden" name="_csrf" value="<?=Yii::$app->request->getCsrfToken()?>" />
                            <fieldset>
                                <div class="row">
                                    <div class="col-xs-12">
                                        <input type="text" class="form-control" name="txtSearch" placeholder="Key word">
                                    </div>
                                </div>
                            </fieldset>
                            <input type="hidden" name="txtTinh" id="" value="51">
                            <fieldset>
                                <div class="row">
                                    <div class="col-xs-6">
                                        <?php
                                          $dataHuyen = District::find()->asArray()->where('provinceid=51')->all();
                                          
                                        ?>
                                        <select id="slHuyen" name="slHuyen" class="selectpicker" data-live-search="true" data-live-search-style="begins" title="Chọn huyện">
                                          <?php foreach ($dataHuyen as $huyen) { ?>

                                            <option value="<?=$huyen['districtid']?>"><?=$huyen['name']?></option>
                                          <?php } ?>
                                          
                                          
                                      </select>
                                    </div>
                                    <div class="col-xs-6">
                                        <?php $dataLoai = Loaibds::find()->asArray()->all(); ?>                               
                                          <select name = "slLoai" id="slLoai" class="selectpicker show-tick form-control" >
                                              <option value=""> -Loại BĐS- </option>
                                            <?php foreach ($dataLoai as $loai) { ?>
                                              
                                              <option value="<?=$loai['id']?>"><?=$loai['tenloai']?> </option>
                                              
                                            <?php } ?>
                                          </select>
                                    </div>
                                </div>
                            </fieldset>

                            

                            <fieldset >
                                <div class="row">
                                    <div class="col-xs-12">  
                                        <input class="button btn largesearch-btn" value="Tìm" type="submit">
                                    </div>  
                                </div>
                            </fieldset>                                     
                        </form>
                    </div>
                </div>

                <div class="panel panel-default sidebar-menu wow fadeInRight animated">
                    <div class="panel-heading">
                        <h3 class="panel-title">Recommended</h3>
                    </div>
                    <div class="panel-body recent-property-widget">
                                <ul>
                                <li>
                                    <div class="col-md-3 col-sm-3 col-xs-3 blg-thumb p0">
                                        <a href="single.html"><img src="assets/img/demo/small-property-2.jpg"></a>
                                        <span class="property-seeker">
                                            <b class="b-1">A</b>
                                            <b class="b-2">S</b>
                                        </span>
                                    </div>
                                    <div class="col-md-8 col-sm-8 col-xs-8 blg-entry">
                                        <h6> <a href="single.html">Super nice villa </a></h6>
                                        <span class="property-price">3000000$</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="col-md-3 col-sm-3  col-xs-3 blg-thumb p0">
                                        <a href="single.html"><img src="assets/img/demo/small-property-1.jpg"></a>
                                        <span class="property-seeker">
                                            <b class="b-1">A</b>
                                            <b class="b-2">S</b>
                                        </span>
                                    </div>
                                    <div class="col-md-8 col-sm-8 col-xs-8 blg-entry">
                                        <h6> <a href="single.html">Super nice villa </a></h6>
                                        <span class="property-price">3000000$</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="col-md-3 col-sm-3 col-xs-3 blg-thumb p0">
                                        <a href="single.html"><img src="assets/img/demo/small-property-3.jpg"></a>
                                        <span class="property-seeker">
                                            <b class="b-1">A</b>
                                            <b class="b-2">S</b>
                                        </span>
                                    </div>
                                    <div class="col-md-8 col-sm-8 col-xs-8 blg-entry">
                                        <h6> <a href="single.html">Super nice villa </a></h6>
                                        <span class="property-price">3000000$</span>
                                    </div>
                                </li>

                                <li>
                                    <div class="col-md-3 col-sm-3 col-xs-3 blg-thumb p0">
                                        <a href="single.html"><img src="<?=$hinhanh?>demo/small-property-2.jpg"></a>
                                        <span class="property-seeker">
                                            <b class="b-1">A</b>
                                            <b class="b-2">S</b>
                                        </span>
                                    </div>
                                    <div class="col-md-8 col-sm-8 col-xs-8 blg-entry">
                                        <h6> <a href="single.html">Super nice villa </a></h6>
                                        <span class="property-price">3000000$</span>
                                    </div>
                                </li>

                            </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-9  pr0 padding-top-40 properties-page">
            <div class="col-md-12 clear"> 
                <div class="col-xs-10 page-subheader sorting pl0">
                    <ul class="sort-by-list">
                        <li class="active">
                            <a href="javascript:void(0);" class="order_by_date" data-orderby="property_date" data-order="ASC">
                                Property Date <i class="fa fa-sort-amount-asc"></i>					
                            </a>
                        </li>
                        <li class="">
                            <a href="javascript:void(0);" class="order_by_price" data-orderby="property_price" data-order="DESC">
                                Property Price <i class="fa fa-sort-numeric-desc"></i>						
                            </a>
                        </li>
                    </ul><!--/ .sort-by-list-->

                    <div class="items-per-page">
                        <label for="items_per_page"><b>Property per page :</b></label>
                        <div class="sel">
                            <select id="items_per_page" name="per_page">
                                <option value="3">3</option>
                                <option value="6">6</option>
                                <option value="9">9</option>
                                <option selected="selected" value="12">12</option>
                                <option value="15">15</option>
                                <option value="30">30</option>
                                <option value="45">45</option>
                                <option value="60">60</option>
                            </select>
                        </div><!--/ .sel-->
                    </div><!--/ .items-per-page-->
                </div>

                <div class="col-xs-2 layout-switcher">
                    <a class="layout-list" href="javascript:void(0);"> <i class="fa fa-th-list"></i>  </a>
                    <a class="layout-grid active" href="javascript:void(0);"> <i class="fa fa-th"></i> </a>                          
                </div><!--/ .layout-switcher-->
            </div>

            <div class="col-md-12 clear"> 
                <div id="list-type" class="proerty-th">
                    <?php foreach ($data as $bds) { ?>
                        <div class="col-sm-6 col-md-4 p0">
                            <div class="box-two proerty-item">
                                <div class="item-thumb">
                                    <a href="<?= Yii::$app->homeUrl?>bds/chitietbds?id=<?=$bds['id']?>" ><img src="<?=$bds['avatar']?>"></a>
                                </div>

                                <div class="item-entry overflow">
                                    <h5><a href="<?= Yii::$app->homeUrl?>bds/chitietbds?id=<?=$bds['id']?>"> <?=$bds['tieude']?> </a></h5>
                                    <div class="dot-hr"></div>
                                    <span class="pull-left"><b> Diện tích :</b> <?=$bds['dientich']?> </span>
                                    <span class="proerty-price pull-right"> <?=$bds['giaban']?> VND</span>
                                    <p style="display: none;"></p>
                                    <div class="property-icon">
                                        <img src="<?=$hinhanh?>icon/bed.png">(<?=$bds['sophongngu']?>)|
                                        <img src="<?=$hinhanh?>icon/shawer.png">(<?=$bds['sophongtam']?>)|
                                        <img src="<?=$hinhanh?>icon/cars.png">(<?=$bds['sotang']?>)  
                                    </div>
                                </div> 
                            </div>
                        </div> 
                    <?php } ?>
                </div>
            </div>
            
            <div class="col-md-12"> 
                <div class="pull-right">
                    <div class="pagination">
                        <ul>
                            <li><a href="#">Prev</a></li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">Next</a></li>
                        </ul>
                    </div>
                </div>                
            </div>
        </div>  
        </div>              
    </div>
</div>