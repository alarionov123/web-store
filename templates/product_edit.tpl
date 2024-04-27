{include file="components/header.tpl"}

<div class="product-detail">
    <form action="" method="post" enctype="multipart/form-data">
        {if !empty($products.id)}
            <input name="id" type="hidden" id="id" value="{$products.id}">
        {/if}
        <p class="error">{if isset($error_message)}{$error_message}{/if}</p>
        <div class="form-group">
            <label for="name">Product name</label>
            <input name="name" type="text" id="name" value="{if isset($products.name)}{$products.name}{/if}">
        </div>
        <div class="form-group">
            <label for="description">Product description</label>
            <input name="description" type="text" id="description" value="{if isset($products.description)}{$products.description}{/if}">
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <input name="price" type="text" id="price" value="{if isset($products.price)}{$products.price}{/if}" required>
        </div>
        <div class="form-group">
            <label for="image">Product Image</label>
            {if isset($products.image_path)}
                <div class="product-image">
                    <img src="{$products.image_path}" width="300px">
                </div>
            {/if}
            <input name="image_path" type="file" id="image_path" accept="image/png, image/jpeg, image/jpg" value="{if isset($products.path)}{$products.path}{/if}">
        </div>
        <button type="submit" class="btn">Submit</button>
    </form>
</div>
<script>
    {include file="js/price_checker.js"}
</script>
</body>
</html>