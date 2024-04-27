<?php
/* Smarty version 5.1.0, created on 2024-04-26 21:14:31
  from 'file:product_view.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.1.0',
  'unifunc' => 'content_662be0f7971694_74467075',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '81a8caa382cf91bc2be016176eeec811d46f9b96' => 
    array (
      0 => 'product_view.tpl',
      1 => 1714151669,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:components/header.tpl' => 1,
  ),
))) {
function content_662be0f7971694_74467075 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/html/test/templates';
$_smarty_tpl->renderSubTemplate("file:components/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
<div class="product-detail">
    <div class="product-item-detailed">
        <div class="product-image">
            <img src="<?php echo $_smarty_tpl->getValue('products')['image_path'];?>
" alt="<?php echo $_smarty_tpl->getValue('products')['name'];?>
" width="300px">
        </div>
        <h2 class="product-title"><?php echo $_smarty_tpl->getValue('products')['name'];?>
</h2>
        <p class="product-description"><?php echo $_smarty_tpl->getValue('products')['description'];?>
</p>
        <p class="product-price">Price: <?php echo $_smarty_tpl->getValue('products')['price'];?>
</p>
    </div>
</div>
</body>
</html><?php }
}
