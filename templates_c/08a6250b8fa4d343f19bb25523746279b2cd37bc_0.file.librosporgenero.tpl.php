<?php
/* Smarty version 4.2.1, created on 2022-10-14 21:47:38
  from 'C:\xampp\htdocs\proyect\TPE\templates\librosporgenero.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6349bcda69e5a7_65330306',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '08a6250b8fa4d343f19bb25523746279b2cd37bc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyect\\TPE\\templates\\librosporgenero.tpl',
      1 => 1665776851,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6349bcda69e5a7_65330306 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h3>Libros de <?php echo $_smarty_tpl->tpl_vars['generoPart']->value;?>
:</h3>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['librosgen']->value, 'libro');
$_smarty_tpl->tpl_vars['libro']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['libro']->value) {
$_smarty_tpl->tpl_vars['libro']->do_else = false;
?>
        <li>"<a href='detalleslibro/<?php echo $_smarty_tpl->tpl_vars['libro']->value->Id_libros;?>
'><?php echo $_smarty_tpl->tpl_vars['libro']->value->Titulo;?>
</a>", <?php echo $_smarty_tpl->tpl_vars['libro']->value->Autores;?>
</li>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
