{include file='header.tpl'}
<table>
    <thead>
        <th>Libro</th>
        <th>Detalles</th>
    </thead>
    <tbody>
        {foreach from=$libros item=libro}
            <tr>
                <th>{$libro->Titulo}</th>
                <th><a href='detalleslibro/{$libro->Id_libros}'>Mostrar detalles</a></th>
            </tr>
        {/foreach}
    </tbody>
</table>
{include file='footer.tpl'}