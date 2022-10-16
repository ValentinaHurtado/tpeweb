<?php
/* Smarty version 4.2.1, created on 2022-10-16 06:16:01
  from 'C:\xampp\htdocs\proyect\TPE\templates\forms\formaddlibro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634b8581bc6e35_62009800',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '309114398acaf2e72978d3a1f42e7831af8cdc9f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyect\\TPE\\templates\\forms\\formaddlibro.tpl',
      1 => 1665893007,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:gral/header.tpl' => 1,
    'file:gral/footer.tpl' => 1,
  ),
),false)) {
function content_634b8581bc6e35_62009800 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:gral/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<form method="POST" action="insertarlibro">
    
    <div>
        <label for="titulo">Titulo</label>
        <input type="text" required name="titulo">
    </div>
    
    <div>
        <label for="autores">Autor</label>
        <input type="text" required name="autores">
    </div>
    
    <div>
        <label for="anio">Año de publicacion</label>
        <input type="number" required name="anio">
    </div>
    
    <div>
        <label for="precio">Precio</label>
        <input type="number" required name="precio">
    </div>
    
    <div>
        <label for="genero">Genero</label>
        <select type="text" required name="genero">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['generos']->value, 'genero');
$_smarty_tpl->tpl_vars['genero']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['genero']->value) {
$_smarty_tpl->tpl_vars['genero']->do_else = false;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['genero']->value->Id_generos;?>
"><?php echo $_smarty_tpl->tpl_vars['genero']->value->Genero;?>
</option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
    </div>
    
    <button type="submit" class="btn btn-primary mt-3">Entrar</button>

</form>
<?php $_smarty_tpl->_subTemplateRender('file:gral/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
