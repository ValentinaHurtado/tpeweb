<?php
/* Smarty version 4.2.1, created on 2022-10-16 03:14:43
  from 'C:\xampp\htdocs\proyect\TPE\templates\generos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634b5b034de601_06037780',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '40120979b25c49cb4b856cb93d4018ef866ded71' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyect\\TPE\\templates\\generos.tpl',
      1 => 1665882873,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:gral/header.tpl' => 1,
    'file:gral/footer.tpl' => 1,
  ),
),false)) {
function content_634b5b034de601_06037780 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:gral/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<table>
    <thead>
        <th>Genero</th>
        <th>Descripcion</th>
        <th>Libros</th>
        <?php if ((isset($_SESSION['USER_ID']))) {?>
            <th>Cambios</th>
        <?php }?>
    </thead>
    <tbody>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['generos']->value, 'genero');
$_smarty_tpl->tpl_vars['genero']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['genero']->value) {
$_smarty_tpl->tpl_vars['genero']->do_else = false;
?>
            <tr>
                <th><?php echo $_smarty_tpl->tpl_vars['genero']->value->Genero;?>
</th>
                <th><?php echo $_smarty_tpl->tpl_vars['genero']->value->Descripcion;?>
</th>
                <th><a href='librosporgenero/<?php echo $_smarty_tpl->tpl_vars['genero']->value->Id_generos;?>
'>Ver libros de <?php echo $_smarty_tpl->tpl_vars['genero']->value->Genero;?>
</a></th>
                <?php if (!(isset($_SESSION['USER_ID']))) {?>
                    <th>
                        <a href="deletegenero/<?php echo $_smarty_tpl->tpl_vars['genero']->value->Id_generos;?>
" type="button">Eliminar</a>
                        <a href="editgenero/<?php echo $_smarty_tpl->tpl_vars['genero']->value->Id_generos;?>
" type="button">Modificar</a>
                    </th>
                <?php }?>
            </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </tbody>
    <tfoot>
        <?php if (!(isset($_SESSION['USER_ID']))) {?>
            <th>
                <a href="addgenero" type="button">Agregar un nuevo genero</a>
            </th>
        <?php }?>
    </tfoot
</table>
<?php $_smarty_tpl->_subTemplateRender('file:gral/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
