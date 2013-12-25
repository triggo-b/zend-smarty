<?php /* Smarty version Smarty-3.1.7, created on 2013-12-25 10:06:07
         compiled from "C:\Users\savrasov.boris\project\deff\application\modules\default\views\templates\index\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:282052baae0f336d66-40931555%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a015bfd5851ce0791d4fcd9d28be64d789548d68' => 
    array (
      0 => 'C:\\Users\\savrasov.boris\\project\\deff\\application\\modules\\default\\views\\templates\\index\\index.tpl',
      1 => 1387965913,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '282052baae0f336d66-40931555',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'hello' => 0,
    'this' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_52baae0f39c68',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52baae0f39c68')) {function content_52baae0f39c68($_smarty_tpl) {?><p>
  <?php echo $_smarty_tpl->tpl_vars['hello']->value;?>

</p>

<p>
  <a href="<?php echo $_smarty_tpl->tpl_vars['this']->value->url(array('controller'=>'index','action'=>'index'));?>
">home</a>
</p><?php }} ?>