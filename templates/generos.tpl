{include file='header.tpl'}
    {foreach from=$generos item=genero}
        <h3>{$genero->Genero}</h3>
        <p>{$genero->Descripcion}</p>
        <p><a href='librosporgenero/{$genero->Id_generos}'>Mostrar detalles</a></p>
    {/foreach}
{include file='footer.tpl'}