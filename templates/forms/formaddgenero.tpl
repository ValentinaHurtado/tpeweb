{include file='gral/header.tpl'}

<p class="text-success bg-dark mb-2 ps-4">Agregar un nuevo genero:</p>

<form method="POST" action="insertargenero">

    <div class="my-3 ms-4">
        <label for="genero">Genero: </label>
        <input type="text" required name="genero">
    </div>

    <div class="my-3 ms-4">
        <label for="descripcion">Añadir descripcion del genero: </label>
        <input type="text" required name="descripcion">
    </div>

    <button type="submit" class="btn btn-outline-success ms-4">Agregar</button>

</form>
{include file='gral/footer.tpl'}