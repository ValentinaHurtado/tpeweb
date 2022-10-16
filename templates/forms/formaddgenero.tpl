{include file='gral/header.tpl'}
<form method="POST" action="insertargenero">

    <div>
        <label for="genero">Genero:</label>
        <input type="text" required name="genero">
    </div>

    <div>
        <label for="descripcion">Añadir descripcion del genero:</label>
        <input type="text" required name="descripcion">
    </div>

    <button type="submit" class="btn btn-primary mt-3">Entrar</button>

</form>
{include file='gral/footer.tpl'}