<?php

use App\SmartyInit;
use App\Products;
use App\Database;

$smarty = new SmartyInit();

if (isset($_SESSION['email']) && !empty($_SESSION)) {
    $smarty->assign('logged', 1);
}

if (empty($mode)) {
    $product = new Products(new Database());

    $products = $product->getProducts();

    if (!empty($products)) {
        $smarty->assign('products', $products);
    }
}
$smarty->assign('title', 'Homepage');
$smarty->display('index.tpl');