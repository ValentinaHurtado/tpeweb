{include file='gral/header.tpl'}
<table>
    <thead>
        <th>Libro</th>
        <th>Genero<a href='generos'>(ver lista generos)</a></th>
        {if isset($smarty.session.USER_ID)}
            <th>Cambios</th>
        {/if}
    </thead>
    <tbody>
        {foreach from=$libros item=libro}
            <tr>
                <th>"<a href='detalleslibro/{$libro->Id_libros}'>{$libro->Titulo}</a>", {$libro->Autores}</th>
                <th>{$libro->Generos_fk}</th>
                {if !isset($smarty.session.USER_ID)}
                    <th>
                        <a href="deletelibro/{$libro->Id_libros}" type="button">Eliminar</a>
                        <a href="formeditlibro/{$libro->Id_libros}" type="button">Modificar</a>
                    </th>
                {/if}
            </tr>
        {/foreach}
    </tbody>
    <tfoot>
        {if !isset($smarty.session.USER_ID)}
            <th>
                <a href="addlibro" type="button">Agregar un nuevo libro</a>
            </th>
        {/if}
    </tfoot
</table>
{include file='gral/footer.tpl'}