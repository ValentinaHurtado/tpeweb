<?php
/* Smarty version 4.2.1, created on 2022-10-17 01:38:49
  from 'C:\xampp\htdocs\proyect\tpe\templates\detalleslibro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634c960976aa28_29482148',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4ff68fd5dee1755b65d86c0fc068623a7bc638eb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyect\\tpe\\templates\\detalleslibro.tpl',
      1 => 1665963525,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:gral/header.tpl' => 1,
    'file:gral/footer.tpl' => 1,
  ),
),false)) {
function content_634c960976aa28_29482148 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:gral/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h3 class="display-6 m-2"><?php echo $_smarty_tpl->tpl_vars['libro']->value->Titulo;?>
</h3>
    <div  class="fs-5 ms-4">
        <ul>
            <li>Autor: <?php echo $_smarty_tpl->tpl_vars['libro']->value->Autores;?>
</li>
            <li>Año de publicacion: <?php echo $_smarty_tpl->tpl_vars['libro']->value->Anio;?>
</li>
            <li>Precio: $<?php echo $_smarty_tpl->tpl_vars['libro']->value->Precio;?>
</li>
            <li>Genero: <?php echo $_smarty_tpl->tpl_vars['genero']->value;?>
</li>
        </ul>
    </div>
<?php $_smarty_tpl->_subTemplateRender('file:gral/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
