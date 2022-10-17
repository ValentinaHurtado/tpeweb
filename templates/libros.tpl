{include file='gral/header.tpl'}
<table class="table table-striped-columns">
    <thead class="text-center">
        <th>Libro</th>
        <th>Genero <a class="link-dark" href='generos'>(ver lista generos)</a></th>
        {if isset($smarty.session.USER_ID)}
            <th>Cambios</th>
        {/if}
    </thead>
    <tbody>
        {foreach from=$libros item=libro}
            <tr class="text-center">
                <th  class="fw-normal">"<a class="link-dark" href='detalleslibro/{$libro->Id_libros}'>{$libro->Titulo}</a>", {$libro->Autores}</th>
                <th class="fw-normal">{$libro->Generos_fk}</th>
                {if isset($smarty.session.USER_ID)}
                    <th>
                        <a class="link-warning" href="formeditlibro/{$libro->Id_libros}" type="button">Editar</a>
                        <a class="link-danger" href="deletelibro/{$libro->Id_libros}" type="button">Eliminar</a>
                    </th>
                {/if}
            </tr>
        {/foreach}
    </tbody>
    <tfoot class="text-center">
        {if isset($smarty.session.USER_ID)}
            <th>
                <a class="link-success" href="addlibro" type="button">Agregar un nuevo libro</a>
            </th>
        {/if}
    </tfoot>
</table>
{include file='gral/footer.tpl'}