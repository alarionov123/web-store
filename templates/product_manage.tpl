{include file="components/header.tpl"}
<div class="container">
    <h1 class="product-title">Products manage</h1>
    <p>{if isset($error_message)}{$error_message}{/if}</p>
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
        {foreach from=$products key="k" item="product"}
            <tr>
                <td>{$product.id}</td>
                <td><img src="{$product.image_path}" alt="{$product.name}" width="75px"></td>
                <td>{$product.name}</td>
                <td>{$product.price}</td>
                <td><div class="btn-container"><a href="product?mode=edit&id={$product.id}">Edit</a>
                        <a class="delete" href="product?mode=delete&id={$product.id}">Delete Product</a></div></td>
            </tr>
        {/foreach}
    </table>
</div>