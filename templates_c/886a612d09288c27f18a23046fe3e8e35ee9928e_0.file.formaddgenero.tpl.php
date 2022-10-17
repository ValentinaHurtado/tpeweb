<?php
/* Smarty version 4.2.1, created on 2022-10-17 01:30:01
  from 'C:\xampp\htdocs\proyect\tpe\templates\forms\formaddgenero.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634c93f9cd2623_80395112',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '886a612d09288c27f18a23046fe3e8e35ee9928e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyect\\tpe\\templates\\forms\\formaddgenero.tpl',
      1 => 1665962999,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:gral/header.tpl' => 1,
    'file:gral/footer.tpl' => 1,
  ),
),false)) {
function content_634c93f9cd2623_80395112 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:gral/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<p class="text-success bg-dark mb-2 ps-4">Agregar un nuevo genero:</p>

<form method="POST" action="insertargenero">

    <div class="my-3 ms-4">
        <label for="genero">Genero: </label>
        <input type="text" required name="genero">
    </div>

    <div class="my-3 ms-4">
        <label for="descripcion">Añadir descripcion del genero: </label>
        <input type="text" required name="descripcion">
    </div>

    <button type="submit" class="btn btn-outline-success ms-4">Agregar</button>

</form>
<?php $_smarty_tpl->_subTemplateRender('file:gral/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
