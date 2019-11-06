<?php
/* Smarty version 3.1.33, created on 2019-11-06 23:47:42
  from '/var/www/presta/admin523xxndkq/themes/new-theme/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dc3316e494d20_33293765',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3b12774850b323b8817ec0e2bf16a5b88f434279' => 
    array (
      0 => '/var/www/presta/admin523xxndkq/themes/new-theme/template/content.tpl',
      1 => 1573069250,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dc3316e494d20_33293765 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ajax_confirmation" class="alert alert-success" style="display: none;"></div>


<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
