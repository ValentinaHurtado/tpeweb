{include file='header.tpl'}
    {foreach from=$generos item=genero}
        <h3>{$genero->Genero}</h3>
        <p>{$genero->Descripcion}</p>
        <p><a href='librosporgenero/{$genero->Id_generos}'>Ver libros pertenecientes al genero {$genero->Genero}</a></p>
    {/foreach}
{include file='footer.tpl'}