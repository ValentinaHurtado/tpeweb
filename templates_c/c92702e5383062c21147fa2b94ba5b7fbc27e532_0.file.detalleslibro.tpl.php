<?php
/* Smarty version 4.2.1, created on 2022-10-13 18:04:05
  from 'C:\xampp\htdocs\proyect\TPE\templates\detalleslibro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634836f54a68a6_85101839',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c92702e5383062c21147fa2b94ba5b7fbc27e532' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyect\\TPE\\templates\\detalleslibro.tpl',
      1 => 1665677041,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_634836f54a68a6_85101839 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h3><?php echo $_smarty_tpl->tpl_vars['libro']->value->Titulo;?>
</h3>
<p>Autor: <?php echo $_smarty_tpl->tpl_vars['libro']->value->Autores;?>
</p>
<p>Año de publicacion: <?php echo $_smarty_tpl->tpl_vars['libro']->value->Anio;?>
</p>
<p>Precio: <?php echo $_smarty_tpl->tpl_vars['libro']->value->Precio;?>
</p>
<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
