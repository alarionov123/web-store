<?php

use App\Products;
use App\SmartyInit;
use App\Database;
use App\Images;

$smarty = new SmartyInit();
$product = new Products(new Database(), new Images(new Database()));

/** @var string $mode */

if (isset($_SESSION['email']) && !empty($_SESSION)) {
    $smarty->assign('logged', 1);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = $_POST;
    if (!empty($_FILES['image_path']['size'])) {
        $data = array_merge($data, $_FILES);
    }
    $data = array_merge($data);
    if ($mode === 'edit' || $mode === 'create') {

        $product_id = $product->updateProduct($data);

        if ($product_id) {
            redirect("/product?mode=view&id=" . $product_id);
        }
        $error_message = "Failed to $mode product.";
    }
}
if ($mode === 'edit' || $mode === 'view' || $mode === 'manage') {
    $product_id = $_GET['id'] ?? 0;

    $products = $product->getProducts($product_id);

    if (!empty($products)) {
        $smarty->assign('products', $products);
    }
    $smarty->assign('title', 'Product ' . $mode);
    $smarty->assign('mode', $mode);
    $smarty->display('product_' . $mode . '.tpl');
}

if ($mode === 'create') {
    $smarty->display('product_edit.tpl');
}

if ($mode === 'delete') {
    $product_id = $_GET['id'];

    if (!$product->deleteProduct($product_id)) {
        $error_message = "Failed to $mode product.";
    }
    redirect("/product?mode=manage");
}

if (isset($error_message)) {
    $smarty->assign('error_message', $error_message);
}

