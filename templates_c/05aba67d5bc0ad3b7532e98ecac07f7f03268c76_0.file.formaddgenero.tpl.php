<?php
/* Smarty version 4.2.1, created on 2022-10-16 02:25:17
  from 'C:\xampp\htdocs\proyect\TPE\templates\forms\formaddgenero.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634b4f6d240ca1_99138453',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '05aba67d5bc0ad3b7532e98ecac07f7f03268c76' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyect\\TPE\\templates\\forms\\formaddgenero.tpl',
      1 => 1665879200,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:gral/header.tpl' => 1,
    'file:gral/footer.tpl' => 1,
  ),
),false)) {
function content_634b4f6d240ca1_99138453 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:gral/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<form method="POST" action="insertargenero">

    <div>
        <label for="genero">Genero:</label>
        <input type="text" required name="genero">
    </div>

    <div>
        <label for="descripcion">Añadir descripcion del genero:</label>
        <input type="text" required name="descripcion">
    </div>

    <button type="submit" class="btn btn-primary mt-3">Entrar</button>

</form>
<?php $_smarty_tpl->_subTemplateRender('file:gral/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
