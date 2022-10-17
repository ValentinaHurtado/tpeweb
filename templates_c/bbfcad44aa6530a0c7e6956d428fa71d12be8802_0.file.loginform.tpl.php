<?php
/* Smarty version 4.2.1, created on 2022-10-17 01:45:42
  from 'C:\xampp\htdocs\proyect\tpe\templates\loginform.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634c97a62815d5_28433118',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bbfcad44aa6530a0c7e6956d428fa71d12be8802' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyect\\tpe\\templates\\loginform.tpl',
      1 => 1665963444,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:gral/header.tpl' => 1,
    'file:gral/footer.tpl' => 1,
  ),
),false)) {
function content_634c97a62815d5_28433118 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:gral/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<form method="POST" action="validate">

    <p class="text-primary bg-dark mb-2 ps-4">Ingresar mail y contraseña para entrar:</p>

    <div class="my-3 ms-4">
        <label for="email">Email: </label>
        <input type="email" required name="email">
    </div>
    <div class="my-3 ms-4">
        <label for="password">Password: </label>
        <input type="password" required name="password">
    </div>
    
    <?php if ($_smarty_tpl->tpl_vars['error']->value) {?> 
        <div class="mt-3">
            <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

        </div>
    <?php }?>
    <button type="submit" class="btn btn-outline-primary ms-4">Login</button>

</form>
<?php $_smarty_tpl->_subTemplateRender('file:gral/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
