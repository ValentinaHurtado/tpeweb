<?php
/* Smarty version 4.2.1, created on 2022-10-17 01:30:48
  from 'C:\xampp\htdocs\proyect\tpe\templates\forms\formeditgenero.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634c9428733234_95274831',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9a6cfb46e0fb11a9fc36d5ec212565b56d75aef9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyect\\tpe\\templates\\forms\\formeditgenero.tpl',
      1 => 1665963029,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:gral/header.tpl' => 1,
    'file:gral/footer.tpl' => 1,
  ),
),false)) {
function content_634c9428733234_95274831 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:gral/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<p class="text-warning bg-dark mb-2 ps-4">Editar genero:</p>

<form method="POST" action="editgenero">

    <div class="my-3 ms-4">
        <label for="genero">Editar nombre:</label>
        <input value="<?php echo $_smarty_tpl->tpl_vars['genero']->value->Genero;?>
" type="text" name="genero">
    </div>

    <div class="my-3 ms-4">
        <label for="descripcion">Editar descripcion del genero:</label>
        <input value="<?php echo $_smarty_tpl->tpl_vars['genero']->value->Descripcion;?>
" type="text" name="descripcion">
    </div>

        <input value="<?php echo $_smarty_tpl->tpl_vars['genero']->value->Id_generos;?>
" type="hidden" name="id_generos">

    <button type="submit" class="btn btn-outline-warning ms-4">Editar</button>

</form>
<?php $_smarty_tpl->_subTemplateRender('file:gral/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
