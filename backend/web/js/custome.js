$(document).ready(function(){
	var host = window.location.href;//backend
	host = host.split("backend");
	tinymce.init({
	  selector: 'textarea#gioithieu',
	  height: 500,
	  theme: 'modern',
	  plugins: 'print preview fullpage searchreplace autolink directionality visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists textcolor wordcount imagetools contextmenu colorpicker textpattern help',
	  toolbar1: 'formatselect | bold italic strikethrough forecolor backcolor | link | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent  | removeformat',
	  image_advtab: true,
	  templates: [
	    { title: 'Test template 1', content: 'Test 1' },
	    { title: 'Test template 2', content: 'Test 2' }
	  ],
	  content_css: [
	    '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
	    '//www.tinymce.com/css/codepen.min.css'
	  ],
	  external_filemanager_path:host[0]+"filemanager/",
	  filemanager_title:"Quản lý file" ,
	  external_plugins: { "filemanager" : host[0]+"filemanager/plugin.min.js"}
	});

	//hien thi hinh anh neu co
	imgSrc = $('#loaiimg').val();
	$('#preLoaiimg').attr({
		'src': imgSrc
	});

	$('#loaiimg').click(function(event){
		// alert("ABC duoc lcik");
		$('#myModal').modal("show");
	});

	$('#myModal').on('hidden.bs.modal', function(){
		imgSrc = $('#loaiimg').val();
		$('#preLoaiimg').attr({
			'src': imgSrc
		});
	});

	//cho avatar
	imgSrc = $('#avatar').val();
		$('#preAvatarimg').attr({
			'src': imgSrc
		});
		
	$('#avatar').click(function(event){
		// alert("ABC duoc lcik");
		$('#avatarModal').modal("show");
	});

	$('#avatarModal').on('hidden.bs.modal', function(){
		imgSrc = $('#avatar').val();
		$('#preAvatarimg').attr({
			'src': imgSrc
		});
	});
})