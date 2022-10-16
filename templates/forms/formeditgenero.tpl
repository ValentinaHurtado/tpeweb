{include file='gral/header.tpl'}
<form method="POST" action="editgenero">

    <div>
        <label for="genero">Editar nombre:</label>
        <input value="{$genero->Genero}" type="text" name="genero">
    </div>

    <div>
        <label for="descripcion">Editar descripcion del genero:</label>
        <input value="{$genero->Descripcion}" type="text" name="descripcion">
    </div>

        <input value="{$genero->Id_generos}" type="hidden" name="id_generos">

    <button type="submit" class="btn btn-primary mt-3">Entrar</button>

</form>
{include file='gral/footer.tpl'}