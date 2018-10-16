
<?php $hinhanh = Yii::getAlias('@web') . '/img/'; ?>
<div class="container"> 
    <div class="row">
        <div class="col-md-2"><img src="images/home/logo.png" alt=""></div>
        <div class="col-md-5">
            <h1>Trung tam gia su xyz</h1>
        </div>
        <div class="col-md-5">
            <div class="box" style="color: white; background-color: green">Tin cay</div>
            <div class="box" style="color: white; background-color: orange">Chat luong</div>
            <div class="box" style="color: white; background-color: violet">Nhiet tinh</div>
        </div>
    </div>
</div>

<nav class="navbar navbar-default ">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navigation">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html"><img src="<?=$hinhanh?>logo.png" alt=""></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse yamm" id="navigation">
            
            <ul class="main-nav nav navbar-nav navbar-right">
                <li class="wow fadeInDown" data-wow-delay="0.3s"><a class="" href="<?= Yii::$app->homeUrl?>">Trang chủ</a></li>
                <li class="wow fadeInDown" data-wow-delay="0.5s"><a href="contact.html">Giới thiệu</a></li>
                <li class="dropdown ymm-sw " data-wow-delay="0.1s">
                    <a href="index.html" class="dropdown-toggle active" data-toggle="dropdown" data-hover="dropdown" data-delay="200">Danh mục <b class="caret"></b></a>
                    
                    <ul class="dropdown-menu navbar-nav">
                        <li>
                            <a href="<?= Yii::$app->homeUrl?>bds/listbds?id=1">Danh muc</a>
                        </li>
                        
                    </ul>
                </li>

                <li class="wow fadeInDown" data-wow-delay="0.2s"><a class="" href="properties.html">Tin tức</a></li>
                <li class="wow fadeInDown" data-wow-delay="0.3s"><a class="" href="property.html">Liên hệ</a></li>
                
                
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<!-- End of nav bar -->

<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="lbox" style="background-color: red">Danh cho phu huynh - hoc sinh</div>
            <a href="<?= Yii::$app->homeUrl?>hssv/danglop"><div class="lbox" style="background-color: green">Dang ky tim gia su</div></a>
            <div class="lbox" style="background-color: blue">Lien he: 0909090909</div>
        </div>
        <div class="col-md-6">
            <div id="carousel-id" class="carousel slide" data-ride="carousel">
                
                <div class="carousel-inner">
                    <div class="item active">
                        <img alt="First slide" src="images/slides/2.jpg">
                        <div class="container">
                            <div class="carousel-caption">
                                <h1>Example headline.</h1>
                                
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img alt="First slide" src="images/slides/1.jpg">
                        <div class="container">
                            <div class="carousel-caption">
                                <h1>Another example headline.</h1>
                               
                            </div>
                        </div>
                    </div>
                    
                </div>
                
            </div>
        </div>
        <div class="col-md-3">
            <div class="lbox" style="background-color: red">Danh cho giao vien - sinh vien</div>
            <a href="<?= Yii::$app->homeUrl?>giasu/dangky"><div class="lbox" style="background-color: green">Dang ky tim lop</div></a>
            <div class="lbox" style="background-color: blue">Lien he: 0909090909</div>
        </div>
    </div>
</div>
