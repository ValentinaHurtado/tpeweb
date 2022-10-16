<?php
/* Smarty version 4.2.1, created on 2022-10-16 05:43:49
  from 'C:\xampp\htdocs\proyect\TPE\templates\forms\formeditgenero.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634b7df57cc7f3_22858823',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b3aa425a59b7f396d751b4a0536f80c76f8b3941' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyect\\TPE\\templates\\forms\\formeditgenero.tpl',
      1 => 1665891717,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:gral/header.tpl' => 1,
    'file:gral/footer.tpl' => 1,
  ),
),false)) {
function content_634b7df57cc7f3_22858823 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:gral/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<form method="POST" action="updategenero">

    <div>
        <p>Nombre actual: <?php echo $_smarty_tpl->tpl_vars['genero']->value->Genero;?>
</p>
        <label for="genero">Modificar nombre a:</label>
        <input value="<?php echo $_smarty_tpl->tpl_vars['genero']->value->Genero;?>
" type="text" name="genero">
    </div>

    <div>
        <p>Descripcion de <?php echo $_smarty_tpl->tpl_vars['genero']->value->Genero;?>
: <?php echo $_smarty_tpl->tpl_vars['genero']->value->Descripcion;?>
</p>
        <label for="descripcion">Añadir descripcion del genero:</label>
        <input value="<?php echo $_smarty_tpl->tpl_vars['genero']->value->Descripcion;?>
" type="text" name="descripcion">
        <input value="<?php echo $_smarty_tpl->tpl_vars['genero']->value->Id_generos;?>
" type="hidden" name="id_generos">
    </div>

    <button type="submit" class="btn btn-primary mt-3">Entrar</button>

</form>
<?php $_smarty_tpl->_subTemplateRender('file:gral/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
