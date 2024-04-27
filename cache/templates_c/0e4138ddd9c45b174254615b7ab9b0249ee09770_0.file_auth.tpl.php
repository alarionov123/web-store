<?php
/* Smarty version 5.1.0, created on 2024-04-26 22:35:41
  from 'file:auth.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.1.0',
  'unifunc' => 'content_662bf3fd016f98_80553651',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0e4138ddd9c45b174254615b7ab9b0249ee09770' => 
    array (
      0 => 'auth.tpl',
      1 => 1714156540,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:components/header.tpl' => 1,
  ),
))) {
function content_662bf3fd016f98_80553651 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/html/test/templates';
$_smarty_tpl->renderSubTemplate("file:components/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
<div class="login-container">
    <form action="" method="POST">
        <h2><?php echo $_smarty_tpl->getValue('title');?>
</h2>
        <p><?php if ((null !== ($_smarty_tpl->getValue('error_message') ?? null))) {
echo $_smarty_tpl->getValue('error_message');
}?></p>
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <button class="btn" type="submit">Submit</button>
    </form>
</div>
</body>
</html><?php }
}
