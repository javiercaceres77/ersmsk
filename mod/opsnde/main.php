<style type="text/css"></style>
<?php

if($ob_user->user_id == $conf_generic_user_id) {
	?>
	
<h5>Operations and Development:  Production to consumption</h5>
<br>
<img src="img/ops_p2c.jpg" align="center">
<br>
<h5>Operations and Development: LPG Installation - Settings </h5>
<br>
<img src="img/Ops_LPG.JPG" align="center" width="783" height="380">
<br>
<h5>Operations and Development</h5>
<br>
<img src="img/ops.png" align="center">
<br>

<?php
}
else {
	jump_to($conf_main_page);
}
?>