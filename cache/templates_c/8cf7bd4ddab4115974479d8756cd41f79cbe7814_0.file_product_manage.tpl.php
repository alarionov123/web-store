<?php
/* Smarty version 5.1.0, created on 2024-04-26 22:13:30
  from 'file:product_manage.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.1.0',
  'unifunc' => 'content_662beecacf9f65_85271140',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8cf7bd4ddab4115974479d8756cd41f79cbe7814' => 
    array (
      0 => 'product_manage.tpl',
      1 => 1714155104,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:components/header.tpl' => 1,
  ),
))) {
function content_662beecacf9f65_85271140 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/html/test/templates';
$_smarty_tpl->renderSubTemplate("file:components/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
<div class="container">
    <h1 class="product-title">Products manage</h1>
    <p><?php if ((null !== ($_smarty_tpl->getValue('error_message') ?? null))) {
echo $_smarty_tpl->getValue('error_message');
}?></p>
    <table>
        <thead>
        <tr>
            <th width="5%">ID</th>
            <th>Image</th>
            <th>Name</th>
            <th>Price</th>
            <th width="5%">Actions</th>
        </tr>
        </thead>
        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('products'), 'product', false, 'k');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('k')->value => $_smarty_tpl->getVariable('product')->value) {
$foreach0DoElse = false;
?>
            <tr>
                <td><?php echo $_smarty_tpl->getValue('product')['id'];?>
</td>
                <td><img src="<?php echo $_smarty_tpl->getValue('product')['image_path'];?>
" alt="<?php echo $_smarty_tpl->getValue('product')['name'];?>
" width="75px"></td>
                <td><?php echo $_smarty_tpl->getValue('product')['name'];?>
</td>
                <td><?php echo $_smarty_tpl->getValue('product')['price'];?>
</td>
                <td><div class="btn-container"><a href="product?mode=edit&id=<?php echo $_smarty_tpl->getValue('product')['id'];?>
">Edit</a>
                        <a class="delete" href="product?mode=delete&id=<?php echo $_smarty_tpl->getValue('product')['id'];?>
">Delete Product</a></div></td>
            </tr>
        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
    </table>
</div><?php }
}
