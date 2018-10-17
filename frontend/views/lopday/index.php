<?php
/* @var $this yii\web\View */
?>
<h1>Danh sách lớp dạy đang có</h1>

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