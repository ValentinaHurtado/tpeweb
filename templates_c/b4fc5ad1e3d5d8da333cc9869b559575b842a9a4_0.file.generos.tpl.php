<?php
/* Smarty version 4.2.1, created on 2022-10-17 05:23:14
  from 'C:\xampp\htdocs\proyect\tpe\templates\generos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634ccaa272c093_92165022',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b4fc5ad1e3d5d8da333cc9869b559575b842a9a4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyect\\tpe\\templates\\generos.tpl',
      1 => 1665976984,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:gral/header.tpl' => 1,
    'file:gral/footer.tpl' => 1,
  ),
),false)) {
function content_634ccaa272c093_92165022 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:gral/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php if ($_smarty_tpl->tpl_vars['error']->value) {?> 
        <div class="alert alert-danger">
            <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

        </div>
<?php }?>

<table class="table table-striped-columns">
    <thead class="text-center">
        <th>Genero</th>
        <th>Descripcion</th>
        <th>Libros</th>
        <?php if ((isset($_SESSION['USER_ID']))) {?>
            <th>Cambios</th>
        <?php }?>
    </thead>
    <tbody class="text-center">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['generos']->value, 'genero');
$_smarty_tpl->tpl_vars['genero']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['genero']->value) {
$_smarty_tpl->tpl_vars['genero']->do_else = false;
?>
            <tr>
                <th class="fw-normal"><?php echo $_smarty_tpl->tpl_vars['genero']->value->Genero;?>
</th>
                <th class="fw-normal"><?php echo $_smarty_tpl->tpl_vars['genero']->value->Descripcion;?>
</th>
                <th class="fw-normal"><a class="link-dark" href='librosporgenero/<?php echo $_smarty_tpl->tpl_vars['genero']->value->Id_generos;?>
'>Ver libros de <?php echo $_smarty_tpl->tpl_vars['genero']->value->Genero;?>
</a></th>
                <?php if ((isset($_SESSION['USER_ID']))) {?>
                    <th>
                        <a class="link-warning" href="formeditgenero/<?php echo $_smarty_tpl->tpl_vars['genero']->value->Id_generos;?>
" type="button">Editar</a>
                        <a class="link-danger" href="deletegenero/<?php echo $_smarty_tpl->tpl_vars['genero']->value->Id_generos;?>
" type="button">Eliminar</a>
                    </th>
                <?php }?>
            </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </tbody>
    <tfoot class="text-center">
        <?php if ((isset($_SESSION['USER_ID']))) {?>
            <th>
                <a class="link-success" href="addgenero" type="button">Agregar un nuevo genero</a>
            </th>
        <?php }?>
    </tfoot>
</table>
<?php $_smarty_tpl->_subTemplateRender('file:gral/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
