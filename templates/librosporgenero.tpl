{include file='header.tpl'}
    {foreach from=$libros item=libro}
        <h3>{$libro->Titulo}</h3>
        <p>{$libro->Autores}</p>
        <p><a href='detalleslibro/{$libro->Id_libros}'>Mostrar detalles</a></p>
    {/foreach}
{include file='footer.tpl'}