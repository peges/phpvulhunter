<?php /* Smarty version 3.1.23, created on 2015-05-24 07:36:29
         compiled from "views/template/index.html" */ ?>
<?php
/*%%SmartyHeaderCode:265705561635ddf18c5_58793235%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '43a19e80fd7d836368551f0e7a43a5674faec54d' => 
    array (
      0 => 'views/template/index.html',
      1 => 1432445764,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '265705561635ddf18c5_58793235',
  'has_nocache_code' => false,
  'version' => '3.1.23',
  'unifunc' => 'content_5561635e320157_25229717',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5561635e320157_25229717')) {
function content_5561635e320157_25229717 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '265705561635ddf18c5_58793235';
?>
<!doctype html>
<html lang="en">
<?php echo $_smarty_tpl->getSubTemplate ('header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<body>
	<?php echo $_smarty_tpl->getSubTemplate ('navigation.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


	<div class="content">
		<div id="err_cont">
			<a href="javascript:;">OK</a>
		</div>

		<div class="content-panel">
			<?php echo $_smarty_tpl->getSubTemplate ('content.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

		</div>
	</div>
	<div class="waiting">
		<div class="loading"></div>
		<div class="load-font">
			<div class="wait-font">
				Scanning
			</div>
			<div class="jumppoint">
				<span id="p1">.</span><span id="p2">.</span><span id="p3">.</span>
			</div>
		</div>
	</div>
	<?php echo $_smarty_tpl->getSubTemplate ('footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

</body>
</html><?php }
}
?>