<?php /* Smarty version Smarty-3.1.11, created on 2012-09-06 14:53:53
         compiled from "views\home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:227275048b148506dc2-12244542%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e64ec67b9351f7c35c643899da1c549889b16a43' => 
    array (
      0 => 'views\\home.tpl',
      1 => 1346943231,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '227275048b148506dc2-12244542',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5048b1485758f6_24333583',
  'variables' => 
  array (
    'receiver' => 0,
    'date' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5048b1485758f6_24333583')) {function content_5048b1485758f6_24333583($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\wamp\\www\\lib\\Smarty\\plugins\\modifier.date_format.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title></title>
</head>
<body>

	<p>hello,<?php echo mb_strtoupper($_smarty_tpl->tpl_vars['receiver']->value, 'UTF-8');?>
! It's <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['date']->value,"%d %B");?>
 today!</p>

</html><?php }} ?>