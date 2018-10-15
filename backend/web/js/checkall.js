$(document).ready(function(){
	$('#checkAll').change(function(){
      $('.mh').prop('checked',this.checked?'checked':'');
    })
})