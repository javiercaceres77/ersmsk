<?php

header("Last-Modified: ".gmdate("D, d M Y H:i:s")." GMT");
header("Cache-Control: no-cache, must-revalidate");
header("Pragma: no-cache");

session_start();
//session_unset();

# control $_SESSION inactivity time
if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 1800)) {
    // last request was more than 30 minates ago
    @session_destroy();   // destroy session data in storage
    session_unset();     // unset $_SESSION variable for the runtime
}
$_SESSION['LAST_ACTIVITY'] = time(); // update last activity time stamp

//if($_GET['func'] == 'logout')  session_unset();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="title" content="ERS GLOBAL MSK" />
<meta name="description" content="ERS GLOBAL MSK"  />
<meta name="Keywords" content="ERS GLOBAL MSK" />
<!--<link rel="icon" type="image/png" href="img/favicon.png" />-->
<!--<link rel="shortcut icon" href="img/favicon.ico" />-->
<link href="css/main.css" rel="stylesheet" type="text/css" />
<?php

# Includes  ----------------------------------

include 'inc/config.php';
include $conf_include_path .'comm.php';
include $conf_include_path .'connect.php';
include $conf_include_path .'oops_comm.php';

# add include path for PEAR extensions
/*$path = '/usr/local/lib/php';
set_include_path(get_include_path() . PATH_SEPARATOR . $path);
@include_once 'Mail.php';
@include_once 'Mail/mime.php';*/

/*include $conf_include_path .'oops_sc.php';
if($_GET['mod'] == 'admin') include $conf_include_path .'comm_admin.php';
*/
if(!$_GET['lang'] && !$_SESSION['misc']['lang']) $_GET['lang'] = $conf_default_lang;
if($_GET['lang']) $_SESSION['misc']['lang'] = $_GET['lang'];

include $conf_include_path .'translation.php'; 

date_default_timezone_set($conf_timezone);

# Sanitize get and post  ----------------------------------
sanitize_input();

# Logout user  ----------------------------------
if($_GET['func'] == 'logout') {
	# store record of user logging out?
	session_unset(); session_destroy();
	jump_to($conf_main_page);
	exit();
}

# Get user info  ----------------------------------
if(!isset($_SESSION['login']['user_id']))
	$_SESSION['login']['user_id'] = $conf_generic_user_id;

# Create objects for this page.  ----------------------------------
if(!isset($ob_user))
	$ob_user = new user($_SESSION['login']['user_id'], $_SESSION['login']['name']);

$now = new date_time('now');

# Manage modules  ----------------------------------
if(!$_GET['mod']) $_GET['mod'] = $conf_default_mod;
	
refresh_users_modules(true);

?>
<script language="javascript">
/*
function submit_login_form() {
	if(document.login_form.user.value == '' || document.login_form.pass.value == '')
		alert('<?= ucfirst(write_user_name_pass); ?>');
	document.login_form.url.value = document.location;
	
	document.login_form.submit();
}

function ok_alert(alert_id) {
	url = 'inc/ajax.php?content=ok_alert&detail='+ alert_id +'&mod=<?= $_GET['mod']; ?>';
	getData3(url, 'alerts_box');
}

function show_alerts() {
	url = 'inc/ajax.php?content=show_alerts&mod=<?= $_GET['mod']; ?>';
	getData3(url, 'alerts_box');
}
*/
</script>
<script language="javascript" src="<?= $conf_include_path; ?>comm.js"></script>
<script language="javascript" src="<?= $conf_include_path; ?>ajax.js"></script>
<title>::: ERS GLOBAL MSK :::
<?php  //echo ucfirst($_SESSION['login']['modules'][$_GET['mod']]['name']); ?>
</title>
</head>
<body>
<div id="container">
  <div id="header">
    <img src="img/logo_ers.png">
    <!--<h3><a href="<?= $conf_main_page; ?>" class="no_decoration">ERS GLOBAL MSK</a></h3>-->
  </div>
  <div id="content">
    <div id="alerts_wrapper">
		<div id="alerts" class="notice_info"></div>
		<div id="alerts_close" onclick="JavaScript:close_alerts_box();"></div>
	</div>
<!--    <div class="language_selector">
      <p><?php
	  //print_languages_flags();
	  ?></p>
    </div>-->
    <div id="module_wrapper">
		<div id="menu_container" class="menu_container">
			<table border="0" cellpadding="3" cellspacing="0" width="100%"><tr>
 <?php 
# --------------------  MENU BAR --------------------- #
/*
	background-image:url(../img/home.png);
*/

foreach($_SESSION['login']['modules'] as $mod_id => $mod_info) {
	$title = $mod_info['desc'] ? ' title="'. ucfirst($mod_info['desc']) .'"' : '';
	$icon = $mod_info['icon'] ? '<img src="'. $conf_images_path . $mod_info['icon'] .'" height="18" width="18" align="absmiddle">' : '';
	$class = $mod_id == $_GET['mod'] ? 'menu_active' : 'menu_item';
	
	echo '<td class="'. $class .'"'. $title .' onclick="JavaScript:document.location=\''. $conf_main_page .'?mod='. $mod_id .'\'" align="center">'. $icon . $mod_info['name'] .'</td>';
}
?>
			  </tr>
			</table>
		  </div>
    	<?php

# -------------------- INCLUDE THE MODULE view --------------------- #	
if(!$_GET['view']) $_GET['view'] = 'main';

$include_file = 'mod/'. $_GET['mod'] .'/'. $_GET['view'] .'.php';

if($_SESSION['login']['modules'][$_GET['mod']]['read'])
	include $include_file;

	?>
    </div>
  </div>
  <div id="footer">
    <!--<p>footer info here </p>-->
  </div>
</div>
</body>
</html>