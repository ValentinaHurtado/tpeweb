<?php
/* Smarty version 4.2.1, created on 2022-10-14 04:19:32
  from 'C:\xampp\htdocs\proyect\TPE\templates\generos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6348c734067503_91121344',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '40120979b25c49cb4b856cb93d4018ef866ded71' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyect\\TPE\\templates\\generos.tpl',
      1 => 1665712559,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6348c734067503_91121344 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['generos']->value, 'genero');
$_smarty_tpl->tpl_vars['genero']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['genero']->value) {
$_smarty_tpl->tpl_vars['genero']->do_else = false;
?>
        <h3><?php echo $_smarty_tpl->tpl_vars['genero']->value->Genero;?>
</h3>
        <p><?php echo $_smarty_tpl->tpl_vars['genero']->value->Descripcion;?>
</p>
        <p><a href='librosporgenero/<?php echo $_smarty_tpl->tpl_vars['genero']->value->Id_generos;?>
'>Mostrar detalles</a></p>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
