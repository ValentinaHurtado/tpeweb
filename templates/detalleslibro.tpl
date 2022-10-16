{include file='gral/header.tpl'}
<h3>{$libro->Titulo}</h3>
<p>Autor: {$libro->Autores}</p>
<p>Año de publicacion: {$libro->Anio}</p>
<p>Precio: ${$libro->Precio}</p>
<p>Genero: {$genero}</p>
{include file='gral/footer.tpl'}