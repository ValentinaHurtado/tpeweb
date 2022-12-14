<?php
/* Smarty version 4.2.1, created on 2022-10-17 05:27:27
  from 'C:\xampp\htdocs\proyect\tpe\templates\forms\formeditlibro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634ccb9f2814e3_41733106',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5287ed2be66019480b9b06d8391b96dace30a797' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyect\\tpe\\templates\\forms\\formeditlibro.tpl',
      1 => 1665977235,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:gral/header.tpl' => 1,
    'file:gral/footer.tpl' => 1,
  ),
),false)) {
function content_634ccb9f2814e3_41733106 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:gral/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<p class="text-warning bg-dark mb-2 ps-4">Editar libro:</p>

<form method="POST" action="editlibro">

    <div class="my-3 ms-4">
        <label for="titulo">Editar titulo:</label>
        <input required value="<?php echo $_smarty_tpl->tpl_vars['libro']->value->Titulo;?>
" type="text" name="titulo">
    </div>

    <div class="my-3 ms-4">
        <label for="autores">Editar autores:</label>
        <input required value="<?php echo $_smarty_tpl->tpl_vars['libro']->value->Autores;?>
" type="text" name="autores">
    </div>

    <div class="my-3 ms-4">
        <label for="anio">Editar año de publicacion:</label>
        <input required value="<?php echo $_smarty_tpl->tpl_vars['libro']->value->Anio;?>
" type="number" name="anio">
    </div>

    <div class="my-3 ms-4">
        <label for="precio">Modificar descripcion del genero:</label>
        <input required value="<?php echo $_smarty_tpl->tpl_vars['libro']->value->Precio;?>
" type="number" name="precio">
    </div>

    <div class="my-3 ms-4">
        <label for="genero">Genero</label>
        <select type="text" required name="genero">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['generos']->value, 'genero');
$_smarty_tpl->tpl_vars['genero']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['genero']->value) {
$_smarty_tpl->tpl_vars['genero']->do_else = false;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['genero']->value->Id_generos;?>
"><?php echo $_smarty_tpl->tpl_vars['genero']->value->Genero;?>
</option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
    </div>

        <input value="<?php echo $_smarty_tpl->tpl_vars['libro']->value->Id_libros;?>
" type="hidden" name="id_libros">

    <button type="submit" class="btn btn-outline-warning ms-4">Editar</button>

</form>
<?php $_smarty_tpl->_subTemplateRender('file:gral/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
