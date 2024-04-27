{include file="components/header.tpl"}
<div class="container">
    <h1 class="product-title">Products</h1>
    <div class="products-list">
        {foreach from=$products key="k" item="product"}
        <div class="product-item">
            <div class="product-image">
                <img src="{$product.image_path}" alt="{$product.name}" width="300px">
            </div>
            <h2 class="product-title">{$product.name}</h2>
            <p class="product-description">{$product.description}</p>
            <p class="product-price">Price: {$product.price}</p>
            <div class="btn-container">
                <a href="product?mode=view&id={$product.id}">Check it out</a>
            </div>
        </div>
        {/foreach}
    </div>
</div>
</body>
</html>