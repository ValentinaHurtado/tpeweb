{include file='gral/header.tpl'}
<form method="POST" action="validate">
    <div>
        <label for="email">Email</label>
        <input type="email" required name="email">
    </div>
    <div>
        <label for="password">Password</label>
        <input type="password" required name="password">
    </div>
    
    {if $error} 
        <div class="alert alert-danger mt-3">
            {$error}
        </div>
    {/if}
    <button type="submit" class="btn btn-primary mt-3">Entrar</button>

</form>
{include file='gral/footer.tpl'}