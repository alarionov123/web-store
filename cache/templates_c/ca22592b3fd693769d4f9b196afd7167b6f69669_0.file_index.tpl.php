<?php
/* Smarty version 5.1.0, created on 2024-04-27 14:36:17
  from 'file:index.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.1.0',
  'unifunc' => 'content_662cd521d6dd13_40111273',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ca22592b3fd693769d4f9b196afd7167b6f69669' => 
    array (
      0 => 'index.tpl',
      1 => 1714214176,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:components/header.tpl' => 1,
  ),
))) {
function content_662cd521d6dd13_40111273 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/html/test/templates';
$_smarty_tpl->renderSubTemplate("file:components/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
<div class="container">
    <h1 class="product-title">Products</h1>
    <div class="products-list">
        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('products'), 'product', false, 'k');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('k')->value => $_smarty_tpl->getVariable('product')->value) {
$foreach0DoElse = false;
?>
        <div class="product-item">
            <div class="product-image">
                <img src="<?php echo $_smarty_tpl->getValue('product')['image_path'];?>
" alt="<?php echo $_smarty_tpl->getValue('product')['name'];?>
" width="300px">
            </div>
            <h2 class="product-title"><?php echo $_smarty_tpl->getValue('product')['name'];?>
</h2>
            <p class="product-description"><?php echo $_smarty_tpl->getValue('product')['description'];?>
</p>
            <p class="product-price">Price: <?php echo $_smarty_tpl->getValue('product')['price'];?>
</p>
            <div class="btn-container">
                <a href="product?mode=view&id=<?php echo $_smarty_tpl->getValue('product')['id'];?>
">Check it out</a>
            </div>
        </div>
        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
    </div>
</div>
</body>
</html><?php }
}
