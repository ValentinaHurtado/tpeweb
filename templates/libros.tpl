{include file='header.tpl'}
<table>
    <thead>
        <th>Libro</th>
        <th>Genero<a href='generos'>(ver lista generos)</a></th>
    </thead>
    <tbody>
        {foreach from=$libros item=libro}
            <tr>
                <th>"<a href='detalleslibro/{$libro->Id_libros}'>{$libro->Titulo}</a>", {$libro->Autores}</th>
                <th>{$libro->Generos_fk}</th>
            </tr>
        {/foreach}
    </tbody>
</table>
{include file='footer.tpl'}