<?php /* Smarty version Smarty-3.1.19, created on 2014-08-04 09:17:47
         compiled from "C:\xamxi\htdocs\prestashop\themes\default-bootstrap\modules\blockwishlist\my-account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1645253df339bb12f03-84019250%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fb14abb3f9e0c4ee576c823affba717049b753d4' => 
    array (
      0 => 'C:\\xamxi\\htdocs\\prestashop\\themes\\default-bootstrap\\modules\\blockwishlist\\my-account.tpl',
      1 => 1406792456,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1645253df339bb12f03-84019250',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53df339bb297a5_66725999',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53df339bb297a5_66725999')) {function content_53df339bb297a5_66725999($_smarty_tpl) {?>

<!-- MODULE WishList -->
<li class="lnk_wishlist">
	<a 	href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('blockwishlist','mywishlist',array(),true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'My wishlists','mod'=>'blockwishlist'),$_smarty_tpl);?>
">
		<i class="icon-heart"></i>
		<span><?php echo smartyTranslate(array('s'=>'My wishlists','mod'=>'blockwishlist'),$_smarty_tpl);?>
</span>
	</a>
</li>
<!-- END : MODULE WishList --><?php }} ?>
