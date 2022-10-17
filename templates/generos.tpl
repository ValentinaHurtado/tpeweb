{include file='gral/header.tpl'}
<table class="table table-striped-columns">
    <thead class="text-center">
        <th>Genero</th>
        <th>Descripcion</th>
        <th>Libros</th>
        {if isset($smarty.session.USER_ID)}
            <th>Cambios</th>
        {/if}
    </thead>
    <tbody class="text-center">
        {foreach from=$generos item=genero}
            <tr>
                <th class="fw-normal">{$genero->Genero}</th>
                <th class="fw-normal">{$genero->Descripcion}</th>
                <th class="fw-normal"><a class="link-dark" href='librosporgenero/{$genero->Id_generos}'>Ver libros de {$genero->Genero}</a></th>
                {if isset($smarty.session.USER_ID)}
                    <th>
                        <a class="link-warning" href="formeditgenero/{$genero->Id_generos}" type="button">Editar</a>
                        <a class="link-danger" href="deletegenero/{$genero->Id_generos}" type="button">Eliminar</a>
                    </th>
                {/if}
            </tr>
        {/foreach}
    </tbody>
    <tfoot class="text-center">
        {if isset($smarty.session.USER_ID)}
            <th>
                <a class="link-success" href="addgenero" type="button">Agregar un nuevo genero</a>
            </th>
        {/if}
    </tfoot>
</table>
{include file='gral/footer.tpl'}