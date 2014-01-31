<?php /* Smarty version Smarty-3.1.16, created on 2014-01-31 10:02:41
         compiled from "/Applications/MAMP/htdocs/foo/smarty/templates/home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:157900219052eb66b19f4318-01548124%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd50401fcbf1dbde1382d8d947701533b29ca46ee' => 
    array (
      0 => '/Applications/MAMP/htdocs/foo/smarty/templates/home.tpl',
      1 => 1391158961,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '157900219052eb66b19f4318-01548124',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 1,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52eb66b1a0e814_69230585',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52eb66b1a0e814_69230585')) {function content_52eb66b1a0e814_69230585($_smarty_tpl) {?><!DOCTYPE html>
<head>
  <style>
    /* line 1, (__TEMPLATE__) */
    body {
      background: blue;
      color: white; }
  </style>
</head>
<body>
  <h1><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1>
  Bienvenue
</body>
<?php }} ?>
