<?php
/* Smarty version 4.2.1, created on 2022-10-18 00:49:47
  from 'C:\xampp\htdocs\proyect\tpe\templates\librosporgenero.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634ddc0b0951c6_41720718',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '633f5b2da04cf0866169de8157c1d91dea9dafee' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyect\\tpe\\templates\\librosporgenero.tpl',
      1 => 1666046983,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:gral/header.tpl' => 1,
    'file:gral/footer.tpl' => 1,
  ),
),false)) {
function content_634ddc0b0951c6_41720718 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:gral/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
        <div class="alert alert-danger">
            <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

        </div>
        <?php } else { ?>
            <h3 class="display-6 m-2">Libros de <?php echo $_smarty_tpl->tpl_vars['generoPart']->value;?>
:</h3>
            <ul class="fs-5 ms-4">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['librosgen']->value, 'libro');
$_smarty_tpl->tpl_vars['libro']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['libro']->value) {
$_smarty_tpl->tpl_vars['libro']->do_else = false;
?>
                    <li>"<a  class="link-dark" href='libro/<?php echo $_smarty_tpl->tpl_vars['libro']->value->Id_libros;?>
'>
                        <?php echo $_smarty_tpl->tpl_vars['libro']->value->Titulo;?>
</a>", <?php echo $_smarty_tpl->tpl_vars['libro']->value->Autores;?>
</li>            
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
    <?php }
$_smarty_tpl->_subTemplateRender('file:gral/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
