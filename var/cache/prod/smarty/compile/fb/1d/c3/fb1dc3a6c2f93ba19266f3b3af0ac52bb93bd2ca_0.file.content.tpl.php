<?php
/* Smarty version 3.1.33, created on 2019-11-06 23:44:50
  from '/var/www/presta/admin523xxndkq/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dc330c2050568_54386030',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fb1dc3a6c2f93ba19266f3b3af0ac52bb93bd2ca' => 
    array (
      0 => '/var/www/presta/admin523xxndkq/themes/default/template/content.tpl',
      1 => 1573069250,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dc330c2050568_54386030 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
