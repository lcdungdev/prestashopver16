<?php /* Smarty version Smarty-3.1.19, created on 2014-08-04 09:17:09
         compiled from "C:\xamxi\htdocs\prestashop\prestashop\admin\themes\default\template\helpers\modules_list\modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3007653df337574e6f3-96448037%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cacae8cf47ed19bfca66103ee3b42d6beb176828' => 
    array (
      0 => 'C:\\xamxi\\htdocs\\prestashop\\prestashop\\admin\\themes\\default\\template\\helpers\\modules_list\\modal.tpl',
      1 => 1406792456,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3007653df337574e6f3-96448037',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53df3375753b96_75105911',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53df3375753b96_75105911')) {function content_53df3375753b96_75105911($_smarty_tpl) {?><div class="modal fade" id="modules_list_container">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-title"><?php echo smartyTranslate(array('s'=>'Recommended Modules'),$_smarty_tpl);?>
</h3>
			</div>
			<div class="modal-body">
				<div id="modules_list_container_tab_modal" style="display:none;"></div>
				<div id="modules_list_loader"><i class="icon-refresh icon-spin"></i></div>
			</div>
		</div>
	</div>
</div><?php }} ?>
