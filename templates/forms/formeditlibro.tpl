{include file='gral/header.tpl'}
<form method="POST" action="editlibro">

    <div>
        <label for="titulo">Editar titulo:</label>
        <input value="{$libro->Titulo}" type="text" name="titulo">
    </div>

    <div>
        <label for="autores">Editar autores:</label>
        <input value="{$libro->Autores}" type="text" name="autores">
    </div>

    <div>
        <label for="anio">Editar año de publicacion:</label>
        <input value="{$libro->Anio}" type="number" name="anio">
    </div>

    <div>
        <label for="precio">Modificar descripcion del genero:</label>
        <input value="{$libro->Precio}" type="number" name="precio">
    </div>

    <div>
        <label for="genero">Genero</label>
        <select type="text" required name="genero">
            {foreach from=$generos item=genero}
                <option value="{$genero->Id_generos}">{$genero->Genero}</option>
            {/foreach}
        </select>
    </div>

        <input value="{$libro->Id_libros}" type="hidden" name="id_libros">

    <button type="submit" class="btn btn-primary mt-3">Entrar</button>

</form>
{include file='gral/footer.tpl'}