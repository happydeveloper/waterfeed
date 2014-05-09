<?php
mysql_connect('localhost', 'root', '1111');
mysql_select_db('farm');
$result = mysql_query("SELECT * FROM waterfeed");
$row = mysql_fetch_array($result);
$flag = $row['flag'];
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Bootstrap 101 Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.css" />
	<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.js"></script>

  </head>
  <body>
<div data-role="content"> 
   <div data-demo-html="true">
	<select id="on" name="flip-6" id="flip-6" data-role="slider" data-mini="true" tabindex="-1" class="ui-slider-switch">
	    <option value="off"<?=$flag!=1 ? ' selected="selected"' : ''?>><font><font>Off</font></font></option>
	    <option value="on"<?=$flag==1 ? ' selected="selected"' : ''?>><font><font>On</font></font></option>
	</select>
    </div> 
</div>	
	<script>
		$( "#on" ).change(function() {
			$.ajax({
				'url':'feed.php',
				'type':'POST',
				'dataType':'json',
				'data' : {'flag':$('#on').val()=='on' ? 1 : 0},
				'success':function(result){
					$('#on').val(result == 1 ? 'on' : 'off').slider('refresh');
				}
			})
			return false;
		});
	</script>
  </body>
</html>
