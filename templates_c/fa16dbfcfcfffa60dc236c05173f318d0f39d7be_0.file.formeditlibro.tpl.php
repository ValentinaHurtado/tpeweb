<?php
/* Smarty version 4.2.1, created on 2022-10-16 06:19:41
  from 'C:\xampp\htdocs\proyect\TPE\templates\forms\formeditlibro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634b865dae7e55_81102137',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fa16dbfcfcfffa60dc236c05173f318d0f39d7be' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyect\\TPE\\templates\\forms\\formeditlibro.tpl',
      1 => 1665893671,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:gral/header.tpl' => 1,
    'file:gral/footer.tpl' => 1,
  ),
),false)) {
function content_634b865dae7e55_81102137 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:gral/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<form method="POST" action="editlibro">

    <div>
        <label for="titulo">Editar titulo:</label>
        <input value="<?php echo $_smarty_tpl->tpl_vars['libro']->value->Titulo;?>
" type="text" name="titulo">
    </div>

    <div>
        <label for="autores">Editar autores:</label>
        <input value="<?php echo $_smarty_tpl->tpl_vars['libro']->value->Autores;?>
" type="text" name="autores">
    </div>

    <div>
        <label for="anio">Editar año de publicacion:</label>
        <input value="<?php echo $_smarty_tpl->tpl_vars['libro']->value->Anio;?>
" type="number" name="anio">
    </div>

    <div>
        <label for="precio">Modificar descripcion del genero:</label>
        <input value="<?php echo $_smarty_tpl->tpl_vars['libro']->value->Precio;?>
" type="number" name="precio">
    </div>

    <div>
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

    <button type="submit" class="btn btn-primary mt-3">Entrar</button>

</form>
<?php $_smarty_tpl->_subTemplateRender('file:gral/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
