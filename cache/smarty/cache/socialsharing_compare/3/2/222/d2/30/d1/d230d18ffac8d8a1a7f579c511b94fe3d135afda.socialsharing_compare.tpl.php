<?php /*%%SmartyHeaderCode:24094555e9eb4ca02e4-95525993%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd230d18ffac8d8a1a7f579c511b94fe3d135afda' => 
    array (
      0 => 'D:\\projects\\demo\\demo prestashop\\prestashop\\modules\\socialsharing\\views\\templates\\hook\\socialsharing_compare.tpl',
      1 => 1425618560,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24094555e9eb4ca02e4-95525993',
  'variables' => 
  array (
    'PS_SC_TWITTER' => 0,
    'PS_SC_FACEBOOK' => 0,
    'PS_SC_GOOGLE' => 0,
    'PS_SC_PINTEREST' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_555e9eb4da5ea8_44589088',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_555e9eb4da5ea8_44589088')) {function content_555e9eb4da5ea8_44589088($_smarty_tpl) {?>	<div id="social-share-compare">
		<p>Chia sẻ so sánh này với bạn bè:</p>
		<p class="socialsharing_product">
					<button data-type="twitter" type="button" class="btn btn-default btn-twitter social-sharing">
				<i class="icon-twitter"></i> Tweet
			</button>
							<button data-type="facebook" type="button" class="btn btn-default btn-facebook social-sharing">
				<i class="icon-facebook"></i> Share
			</button>
							<button data-type="google-plus" type="button" class="btn btn-default btn-google-plus social-sharing">
				<i class="icon-google-plus"></i> Google+
			</button>
							<button data-type="pinterest" type="button" class="btn btn-default btn-pinterest social-sharing">
				<i class="icon-pinterest"></i> Pinterest
			</button>
				</p>
	</div>
<?php }} ?>
