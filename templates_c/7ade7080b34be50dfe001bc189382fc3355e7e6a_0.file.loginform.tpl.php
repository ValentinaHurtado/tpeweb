<?php
/* Smarty version 4.2.1, created on 2022-10-15 04:30:21
  from 'C:\xampp\htdocs\proyect\TPE\templates\loginform.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634a1b3dbf8433_32542404',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7ade7080b34be50dfe001bc189382fc3355e7e6a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyect\\TPE\\templates\\loginform.tpl',
      1 => 1665797316,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:gral/header.tpl' => 1,
    'file:gral/footer.tpl' => 1,
  ),
),false)) {
function content_634a1b3dbf8433_32542404 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:gral/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<form method="POST" action="validate">
    <div>
        <label for="email">Email</label>
        <input type="email" required name="email">
    </div>
    <div>
        <label for="password">Password</label>
        <input type="password" required name="password">
    </div>
    
    <?php if ($_smarty_tpl->tpl_vars['error']->value) {?> 
        <div class="alert alert-danger mt-3">
            <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

        </div>
    <?php }?>
    <button type="submit" class="btn btn-primary mt-3">Entrar</button>

</form>
<?php $_smarty_tpl->_subTemplateRender('file:gral/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
