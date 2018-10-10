<?php 
// use frontend\assets\AppAsset; 
use frontend\models\Bds;
use frontend\widgets\TrangchusearchWidget;
use frontend\widgets\TrangchuwelcomeWidget;
use frontend\widgets\LopmoiWidget;
// $hinhanh = AppAsset::register($this)->baseUrl . '/frontend/web/img';
?>

<?= TrangchuwelcomeWidget::widget() ?>
<!-- danh sach lop chua nhan -->
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Lop day moi</h3>
  </div>
  <div class="panel-body">
    <?= TrangchusearchWidget::widget() ?>
    <br>
    <?= LopmoiWidget::widget(); ?>
  </div>
</div>
<!-- danh sach lop chua nhan -->


