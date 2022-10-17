{include file='gral/header.tpl'}
    {if $error}
        <div class="alert alert-danger">
            {$error}
        </div>
        {else}
            <h3 class="display-6 m-2">Libros de {$generoPart}:</h3>
            <ul class="fs-5 ms-4">
                {foreach from=$librosgen item=libro}
                    <li>"<a  class="link-dark" href='libro/{$libro->Id_libros}'>
                        {$libro->Titulo}</a>", {$libro->Autores}</li>            
                {/foreach}
            </ul>
    {/if}
{include file='gral/footer.tpl'}