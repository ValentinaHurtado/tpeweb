{include file='gral/header.tpl'}
<form method="POST" action="insertarlibro">
    
    <div>
        <label for="titulo">Titulo</label>
        <input type="text" required name="titulo">
    </div>
    
    <div>
        <label for="autores">Autor</label>
        <input type="text" required name="autores">
    </div>
    
    <div>
        <label for="anio">Año de publicacion</label>
        <input type="number" required name="anio">
    </div>
    
    <div>
        <label for="precio">Precio</label>
        <input type="number" required name="precio">
    </div>
    
    <div>
        <label for="genero">Genero</label>
        <select type="text" required name="genero">
            {foreach from=$generos item=genero}
                <option value="{$genero->Id_generos}">{$genero->Genero}</option>
            {/foreach}
        </select>
    </div>
    
    <button type="submit" class="btn btn-primary mt-3">Entrar</button>

</form>
{include file='gral/footer.tpl'}