<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{$title}</title>
    <link href="styles/main.less" rel="stylesheet/less">
    <script src="https://cdn.jsdelivr.net/npm/less" ></script>
</head>
<body>
<div id="header">
     <div class="container">
         <div class="logo">
             <div class="logo-letter">
             E
         </div>
         <div class="logo-text">
             xikane
         </div>
         </div>
         <div class="menu">
             <a href="/" class="menu-item">Home</a>
             {if !isset($logged)}
                 <a href="auth?mode=login" class="menu-item">Log in</a>
                 <a href="auth?mode=register" class="menu-item">Register</a>
             {/if}
             {if isset($logged)}
                 <a href="product?mode=create" class="menu-item">Create products</a>
                 <a href="product?mode=manage" class="menu-item">Manage products</a>
                 <a href="auth?mode=logout" class="menu-item">Log out</a>
                 <div class="admin-indication">Logged as admin</div>
             {/if}
         </div>
     </div>
</div>
