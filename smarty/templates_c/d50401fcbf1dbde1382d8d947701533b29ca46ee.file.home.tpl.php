<?php /* Smarty version Smarty-3.1.16, created on 2014-01-31 10:19:25
         compiled from "/Applications/MAMP/htdocs/foo/smarty/templates/home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:139144700352eb6a9d3c3666-53593026%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd50401fcbf1dbde1382d8d947701533b29ca46ee' => 
    array (
      0 => '/Applications/MAMP/htdocs/foo/smarty/templates/home.tpl',
      1 => 1391159965,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '139144700352eb6a9d3c3666-53593026',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 1,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52eb6a9d3e0de7_14529652',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52eb6a9d3e0de7_14529652')) {function content_52eb6a9d3e0de7_14529652($_smarty_tpl) {?><!DOCTYPE html>
<head>
  <style>
    /* line 1, (__TEMPLATE__) */
    body {
      background: rgba(0, 40, 255, 0.2);
      color: white;
      font-family: Helvetica, Arial;
      margin: auto;
      width: 500px;
      border-left: 1px solid rgba(0, 40, 255, 0.4);
      border-right: 1px solid rgba(0, 40, 255, 0.4);
      padding: 10px 100px;
      min-height: 100%; }
    
    /* line 12, (__TEMPLATE__) */
    footer {
      font-size: 0.8em;
      margin-top: 30px;
      padding-top: 10px;
      text-align: right;
      border-top: 1px solid rgba(0, 40, 255, 0.1); }
    
    /* line 19, (__TEMPLATE__) */
    html {
      height: 100%; }
  </style>
</head>
<body>
  <h1><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1>
  Bienvenue
  <footer>
    brought to you with love by @zog
  </footer>
</body>
<?php }} ?>
