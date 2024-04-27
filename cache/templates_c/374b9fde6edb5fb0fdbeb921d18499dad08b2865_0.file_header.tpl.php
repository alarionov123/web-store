<?php
/* Smarty version 5.1.0, created on 2024-04-25 23:25:49
  from 'file:components/header.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.1.0',
  'unifunc' => 'content_662aae3d707da9_54362132',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '374b9fde6edb5fb0fdbeb921d18499dad08b2865' => 
    array (
      0 => 'components/header.tpl',
      1 => 1714073148,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_662aae3d707da9_54362132 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/html/test/templates/components';
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $_smarty_tpl->getValue('title');?>
</title>
    <link href="styles/main.less" rel="stylesheet/less">
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/less" ><?php echo '</script'; ?>
>
</head>
<body>
<div id="header">
     <div class="container">
         <div class="logo">
             <div class="logo-letter">
             E
         </div>
         <div class="logo-text">
             xikane
         </div>
         </div>
         <div class="menu">
             <a href="/test" class="menu-item">Home</a>
             <?php if (!(null !== ($_smarty_tpl->getValue('logged') ?? null))) {?>
                 <a href="auth?mode=login" class="menu-item">Log in</a>
                 <a href="auth?mode=register" class="menu-item">Register</a>
             <?php }?>
             <?php if ((null !== ($_smarty_tpl->getValue('logged') ?? null))) {?>
                 <a href="product?mode=create" class="menu-item">Create products</a>
                 <a href="product?mode=manage" class="menu-item">Manage products</a>
                 <a href="auth?mode=logout" class="menu-item">Log out</a>
                 <div class="admin-indication">Logged as admin</div>
             <?php }?>
         </div>
     </div>
</div><?php }
}
