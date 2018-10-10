$(document).ready(function(){
	$('#bds-huyen').change(function(){
		 alert($('#bds-huyen').val());
		 var url = <?php echo Url::toRoute("/ward/listward"); ?>;
		 alert(url);
		// $.post( "http://localhost/yii2/bds/backend/web/ward/listward",
		// $.post( "http://localhost/ajaxpost.php",
		$.post( '<?php echo Url::toRoute("/ward/listward"); ?>', 
			{id: $('#bds-huyen').val()}, 
			function( data ) {
                      $( "select#bds-xa" ).html( data );
                      console.log(data);
                    }
            );
	})
})