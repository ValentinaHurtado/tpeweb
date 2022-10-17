<?php
/* Smarty version 4.2.1, created on 2022-10-17 00:58:37
  from 'C:\xampp\htdocs\proyect\tpe\templates\libros.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634c8c9d2b3149_32735869',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1ff9a8bd96d3ce76fffd00a0983084dea6502980' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyect\\tpe\\templates\\libros.tpl',
      1 => 1665961099,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:gral/header.tpl' => 1,
    'file:gral/footer.tpl' => 1,
  ),
),false)) {
function content_634c8c9d2b3149_32735869 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:gral/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<table class="table table-striped-columns">
    <thead class="text-center">
        <th>Libro</th>
        <th>Genero <a class="link-dark" href='generos'>(ver lista generos)</a></th>
        <?php if (!(isset($_SESSION['USER_ID']))) {?>
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
            <tr class="text-center">
                <th  class="fw-normal">"<a class="link-dark" href='detalleslibro/<?php echo $_smarty_tpl->tpl_vars['libro']->value->Id_libros;?>
'><?php echo $_smarty_tpl->tpl_vars['libro']->value->Titulo;?>
</a>", <?php echo $_smarty_tpl->tpl_vars['libro']->value->Autores;?>
</th>
                <th class="fw-normal"><?php echo $_smarty_tpl->tpl_vars['libro']->value->Generos_fk;?>
</th>
                <?php if (!(isset($_SESSION['USER_ID']))) {?>
                    <th>
                        <a class="link-warning" href="formeditlibro/<?php echo $_smarty_tpl->tpl_vars['libro']->value->Id_libros;?>
" type="button">Editar</a>
                        <a class="link-danger" href="deletelibro/<?php echo $_smarty_tpl->tpl_vars['libro']->value->Id_libros;?>
" type="button">Eliminar</a>
                    </th>
                <?php }?>
            </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </tbody>
    <tfoot class="text-center">
        <?php if (!(isset($_SESSION['USER_ID']))) {?>
            <th>
                <a class="link-success" href="addlibro" type="button">Agregar un nuevo libro</a>
            </th>
        <?php }?>
    </tfoot>
</table>
<?php $_smarty_tpl->_subTemplateRender('file:gral/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
