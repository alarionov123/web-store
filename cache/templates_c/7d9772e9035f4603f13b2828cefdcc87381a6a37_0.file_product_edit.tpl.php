<?php
/* Smarty version 5.1.0, created on 2024-04-26 23:31:10
  from 'file:product_edit.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.1.0',
  'unifunc' => 'content_662c00fe4501d9_52222182',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7d9772e9035f4603f13b2828cefdcc87381a6a37' => 
    array (
      0 => 'product_edit.tpl',
      1 => 1714159868,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:components/header.tpl' => 1,
    'file:js/price_checker.js' => 1,
  ),
))) {
function content_662c00fe4501d9_52222182 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/html/test/templates';
$_smarty_tpl->renderSubTemplate("file:components/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<div class="product-detail">
    <form action="" method="post" enctype="multipart/form-data">
        <?php if (!empty($_smarty_tpl->getValue('products')['id'])) {?>
            <input name="id" type="hidden" id="id" value="<?php echo $_smarty_tpl->getValue('products')['id'];?>
">
        <?php }?>
        <p class="error"><?php if ((null !== ($_smarty_tpl->getValue('error_message') ?? null))) {
echo $_smarty_tpl->getValue('error_message');
}?></p>
        <div class="form-group">
            <label for="name">Product name</label>
            <input name="name" type="text" id="name" value="<?php if ((null !== ($_smarty_tpl->getValue('products')['name'] ?? null))) {
echo $_smarty_tpl->getValue('products')['name'];
}?>">
        </div>
        <div class="form-group">
            <label for="description">Product description</label>
            <input name="description" type="text" id="description" value="<?php if ((null !== ($_smarty_tpl->getValue('products')['description'] ?? null))) {
echo $_smarty_tpl->getValue('products')['description'];
}?>">
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <input name="price" type="text" id="price" value="<?php if ((null !== ($_smarty_tpl->getValue('products')['price'] ?? null))) {
echo $_smarty_tpl->getValue('products')['price'];
}?>" required>
        </div>
        <div class="form-group">
            <label for="image">Product Image</label>
            <?php if ((null !== ($_smarty_tpl->getValue('products')['image_path'] ?? null))) {?>
                <div class="product-image">
                    <img src="<?php echo $_smarty_tpl->getValue('products')['image_path'];?>
" width="300px">
                </div>
            <?php }?>
            <input name="image_path" type="file" id="image_path" accept="image/png, image/jpeg, image/jpg" value="<?php if ((null !== ($_smarty_tpl->getValue('products')['path'] ?? null))) {
echo $_smarty_tpl->getValue('products')['path'];
}?>">
        </div>
        <button type="submit" class="btn">Submit</button>
    </form>
</div>
<?php echo '<script'; ?>
>
    <?php $_smarty_tpl->renderSubTemplate("file:js/price_checker.js", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
echo '</script'; ?>
>
</body>
</html><?php }
}
