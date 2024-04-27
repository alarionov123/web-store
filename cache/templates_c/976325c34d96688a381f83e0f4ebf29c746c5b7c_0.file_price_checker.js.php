<?php
/* Smarty version 5.1.0, created on 2024-04-26 23:14:44
  from 'file:js/price_checker.js' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.1.0',
  'unifunc' => 'content_662bfd247f81f9_79301504',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '976325c34d96688a381f83e0f4ebf29c746c5b7c' => 
    array (
      0 => 'js/price_checker.js',
      1 => 1714158857,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_662bfd247f81f9_79301504 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/html/test/js';
?>const priceInput = document.getElementById('price');

priceInput.addEventListener('input', function(event) {
    const value = event.target.value;
    const newValue = value.replace(/\D/g, '');

    if (newValue !== value) {
        event.target.value = newValue;
    }
});<?php }
}
