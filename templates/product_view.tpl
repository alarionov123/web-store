{include file="components/header.tpl"}
<div class="product-detail">
    <div class="product-item-detailed">
        <div class="product-image">
            <img src="{$products.image_path}" alt="{$products.name}" width="300px">
        </div>
        <h2 class="product-title">{$products.name}</h2>
        <p class="product-description">{$products.description}</p>
        <p class="product-price">Price: {$products.price}</p>
    </div>
</div>
</body>
</html>