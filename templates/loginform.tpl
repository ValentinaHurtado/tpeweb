{include file='gral/header.tpl'}
<form method="POST" action="validate">

    <p class="text-primary bg-dark mb-2 ps-4">Ingresar mail y contraseña para entrar:</p>

    <div class="my-3 ms-4">
        <label for="email">Email: </label>
        <input type="email" required name="email">
    </div>
    <div class="my-3 ms-4">
        <label for="password">Password: </label>
        <input type="password" required name="password">
    </div>
    
    {if $error} 
        <div class="mt-3">
            {$error}
        </div>
    {/if}
    <button type="submit" class="btn btn-outline-primary ms-4">Login</button>

</form>
{include file='gral/footer.tpl'}