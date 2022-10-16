{include file='gral/header.tpl'}
<h3>Libros de {$generoPart}:</h3>
    {foreach from=$librosgen item=libro}
        <li>"<a href='detalleslibro/{$libro->Id_libros}'>{$libro->Titulo}</a>", {$libro->Autores}</li>
    {/foreach}
{include file='gral/footer.tpl'}