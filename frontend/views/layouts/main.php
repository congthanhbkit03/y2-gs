<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use frontend\widgets\TopnavWidget;
use frontend\widgets\TopheaderWidget;
use frontend\widgets\SidebarWidget;
use frontend\widgets\FooterWidget;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Bất động sản Quảng Ngãi">
        <meta name="author" content="Bùi Công Thành">
        <meta name="keyword" content="html5, css, bootstrap, property, real-estate theme , bootstrap template">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800' rel='stylesheet' type='text/css'>

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="icon" href="favicon.ico" type="image/x-icon">
        
        <?= Html::csrfMetaTags() ?>
	    <title><?= Html::encode($this->title) ?></title>
	    <?php $this->head() ?>
    </head>
    <body>
	<?php $this->beginBody() ?>
		<?php $hinhanh = AppAsset::register($this)->baseUrl . '/frontend/web/img/'; ?>
        <div id="preloader">
            <div id="status">&nbsp;</div>
        </div>
        <!-- Body content -->

        <?= TopheaderWidget::widget() ?>

        <?= TopnavWidget::widget() ?>
        
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <?= SidebarWidget::widget() ?>
                </div>
                <div class="col-md-9">
                    <?=$content?>
                </div>
            </div>
        </div>
		
        

        <?= FooterWidget::widget() ?>

        

	<?php $this->endBody() ?>
	</body>
</html>
<?php $this->endPage() ?>