{include file='gral/header.tpl'}

<h3 class="display-6 m-2">{$libro->Titulo}</h3>
    <div  class="fs-5 ms-4">
        <ul>
            <li>Autor: {$libro->Autores}</li>
            <li>Año de publicacion: {$libro->Anio}</li>
            <li>Precio: ${$libro->Precio}</li>
            <li>Genero: {$genero}</li>
        </ul>
    </div>
{include file='gral/footer.tpl'}