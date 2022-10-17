{include file='gral/header.tpl'}

<p class="text-warning bg-dark mb-2 ps-4">Editar libro:</p>

<form method="POST" action="editlibro">

    <div class="my-3 ms-4">
        <label for="titulo">Editar titulo:</label>
        <input required value="{$libro->Titulo}" type="text" name="titulo">
    </div>

    <div class="my-3 ms-4">
        <label for="autores">Editar autores:</label>
        <input required value="{$libro->Autores}" type="text" name="autores">
    </div>

    <div class="my-3 ms-4">
        <label for="anio">Editar año de publicacion:</label>
        <input required value="{$libro->Anio}" type="number" name="anio">
    </div>

    <div class="my-3 ms-4">
        <label for="precio">Modificar descripcion del genero:</label>
        <input required value="{$libro->Precio}" type="number" name="precio">
    </div>

    <div class="my-3 ms-4">
        <label for="genero">Genero</label>
        <select type="text" required name="genero">
            {foreach from=$generos item=genero}
                <option value="{$genero->Id_generos}">{$genero->Genero}</option>
            {/foreach}
        </select>
    </div>

        <input value="{$libro->Id_libros}" type="hidden" name="id_libros">

    <button type="submit" class="btn btn-outline-warning ms-4">Editar</button>

</form>
{include file='gral/footer.tpl'}