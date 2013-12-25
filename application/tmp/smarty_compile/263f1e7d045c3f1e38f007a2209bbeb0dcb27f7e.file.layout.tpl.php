<?php /* Smarty version Smarty-3.1.7, created on 2013-12-25 10:06:07
         compiled from "C:\Users\savrasov.boris\project\deff\application\modules\default\views\templates\layout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:638152baae0f409c99-87565688%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '263f1e7d045c3f1e38f007a2209bbeb0dcb27f7e' => 
    array (
      0 => 'C:\\Users\\savrasov.boris\\project\\deff\\application\\modules\\default\\views\\templates\\layout.tpl',
      1 => 1387965944,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '638152baae0f409c99-87565688',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'this' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_52baae0f42522',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52baae0f42522')) {function content_52baae0f42522($_smarty_tpl) {?><div id="header">
  <?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>
<?php echo $_smarty_tpl->tpl_vars['this']->value->layout()->content;?>
<?php }} ?>