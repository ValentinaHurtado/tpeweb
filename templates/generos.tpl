{include file='gral/header.tpl'}
<table>
    <thead>
        <th>Genero</th>
        <th>Descripcion</th>
        <th>Libros</th>
        {if isset($smarty.session.USER_ID)}
            <th>Cambios</th>
        {/if}
    </thead>
    <tbody>
        {foreach from=$generos item=genero}
            <tr>
                <th>{$genero->Genero}</th>
                <th>{$genero->Descripcion}</th>
                <th><a href='librosporgenero/{$genero->Id_generos}'>Ver libros de {$genero->Genero}</a></th>
                {if !isset($smarty.session.USER_ID)}
                    <th>
                        <a href="deletegenero/{$genero->Id_generos}" type="button">Eliminar</a>
                        <a href="editgenero/{$genero->Id_generos}" type="button">Modificar</a>
                    </th>
                {/if}
            </tr>
        {/foreach}
    </tbody>
    <tfoot>
        {if !isset($smarty.session.USER_ID)}
            <th>
                <a href="addgenero" type="button">Agregar un nuevo genero</a>
            </th>
        {/if}
    </tfoot
</table>
{include file='gral/footer.tpl'}