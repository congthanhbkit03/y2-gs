<?php
/* @var $this yii\web\View */
?>
<h1>Danh sach gia su</h1>

<?php foreach ($data as $giasu) { ?>
	<div class="col-md-6" style="height:355px;overflow: hidden;">
		<div class="thumb" style="width: 30%; float: left;"><img src="<?=$giasu->anh?>" style="width:100%; height:128px">
		</div>
		<div class="news_lead" style="line-height:150% !important">
			<strong>Mã số:</strong> <?=$giasu->id?><br>
			<strong>Tên gia sư:</strong> <strong style="color:#008eff"><a href="/gia-su-4272.html"><?=$giasu->hoten?></a></strong><br>
			<strong>Ngày sinh:</strong> <?=$giasu->ngaysinh?><br>
			<strong>Hiện là:</strong> Sinh viên<br>
			<strong>Trường:</strong> Đại học Kinh Tế<br>
			<strong>Chuyên ngành:</strong> Kế Toán<br>
			<strong>Năm tốt nghiệp:</strong> 2020<br>
			<strong>Nhận dạy:</strong> Lớp 7, Lớp 8, Lớp 9<br>
			<strong>Các môn:</strong> Toán<br>
			<strong>Khu vực:</strong> Quận 3, Quận 10<br>
			<strong>Yêu cầu lương tối thiểu:</strong> 1,200,000 đồng/tháng<br>
			<strong>Thông tin khác:</strong> Trách nhiệm, nhiệt tình, nỗ lực trong công việc
		</div>
	</div>
<?php } ?>