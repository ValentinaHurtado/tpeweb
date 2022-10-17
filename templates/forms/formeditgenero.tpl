{include file='gral/header.tpl'}

<p class="text-warning bg-dark mb-2 ps-4">Editar genero:</p>

<form method="POST" action="editgenero">

    <div class="my-3 ms-4">
        <label for="genero">Editar nombre:</label>
        <input required value="{$genero->Genero}" type="text" name="genero">
    </div>

    <div class="my-3 ms-4">
        <label for="descripcion">Editar descripcion del genero:</label>
        <input required value="{$genero->Descripcion}" type="text" name="descripcion">
    </div>

        <input value="{$genero->Id_generos}" type="hidden" name="id_generos">

    <button type="submit" class="btn btn-outline-warning ms-4">Editar</button>

</form>
{include file='gral/footer.tpl'}