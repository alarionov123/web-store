{include file="components/header.tpl"}
<div class="login-container">
    <form action="" method="POST">
        <h2>{$title}</h2>
        <p>{if isset($error_message)}{$error_message}{/if}</p>
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <button class="btn" type="submit">Submit</button>
    </form>
</div>
</body>
</html>