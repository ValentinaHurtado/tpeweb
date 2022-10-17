{include file='gral/header.tpl'}

<p class="text-success bg-dark mb-2 ps-4">Agregar un nuevo libro:</p>

<form method="POST" action="insertarlibro">
    
    <div class="my-3 ms-4">
        <label for="titulo">Titulo: </label>
        <input type="text" required name="titulo">
    </div>
    
    <div class="my-3 ms-4">
        <label for="autores">Autor: </label>
        <input type="text" required name="autores">
    </div>
    
    <div class="my-3 ms-4">
        <label for="anio">Año de publicacion: </label>
        <input type="number" required name="anio">
    </div>
    
    <div class="my-3 ms-4">
        <label for="precio">Precio:  </label>
        <input type="number" required name="precio">
    </div>
    
    <div class="my-3 ms-4">
        <label for="genero">Genero: </label>
        <select type="text" required name="genero">
            {foreach from=$generos item=genero}
                <option value="{$genero->Id_generos}">{$genero->Genero}</option>
            {/foreach}
        </select>
    </div>
    
    <button type="submit" class="btn btn-outline-success ms-4">Agregar</button>

</form>
{include file='gral/footer.tpl'}