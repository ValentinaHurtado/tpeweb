<?php
/* Smarty version 4.2.1, created on 2022-10-16 06:19:38
  from 'C:\xampp\htdocs\proyect\TPE\templates\libros.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634b865a93c0d1_85470997',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '124b92a1449182f8fc1ddcb5c3a6a3ac3f0da280' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyect\\TPE\\templates\\libros.tpl',
      1 => 1665893975,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:gral/header.tpl' => 1,
    'file:gral/footer.tpl' => 1,
  ),
),false)) {
function content_634b865a93c0d1_85470997 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:gral/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<table>
    <thead>
        <th>Libro</th>
        <th>Genero<a href='generos'>(ver lista generos)</a></th>
        <?php if ((isset($_SESSION['USER_ID']))) {?>
            <th>Cambios</th>
        <?php }?>
    </thead>
    <tbody>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['libros']->value, 'libro');
$_smarty_tpl->tpl_vars['libro']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['libro']->value) {
$_smarty_tpl->tpl_vars['libro']->do_else = false;
?>
            <tr>
                <th>"<a href='detalleslibro/<?php echo $_smarty_tpl->tpl_vars['libro']->value->Id_libros;?>
'><?php echo $_smarty_tpl->tpl_vars['libro']->value->Titulo;?>
</a>", <?php echo $_smarty_tpl->tpl_vars['libro']->value->Autores;?>
</th>
                <th><?php echo $_smarty_tpl->tpl_vars['libro']->value->Generos_fk;?>
</th>
                <?php if (!(isset($_SESSION['USER_ID']))) {?>
                    <th>
                        <a href="deletelibro/<?php echo $_smarty_tpl->tpl_vars['libro']->value->Id_libros;?>
" type="button">Eliminar</a>
                        <a href="formeditlibro/<?php echo $_smarty_tpl->tpl_vars['libro']->value->Id_libros;?>
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
                <a href="addlibro" type="button">Agregar un nuevo libro</a>
            </th>
        <?php }?>
    </tfoot
</table>
<?php $_smarty_tpl->_subTemplateRender('file:gral/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
