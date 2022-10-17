<?php
/* Smarty version 4.2.1, created on 2022-10-17 01:59:16
  from 'C:\xampp\htdocs\proyect\tpe\templates\gral\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634c9ad4bbd553_62311900',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '09ec79ac5923064be27ffc3d0fc725f751624212' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyect\\tpe\\templates\\gral\\header.tpl',
      1 => 1665964000,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634c9ad4bbd553_62311900 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
  <base href="<?php echo BASE_URL;?>
">

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" 
  integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <title>Libreria</title>
</head>

<body>

<header class="navbar navbar-dark bg-primary">
  <div class="container-fluid">
  
    <h1 class="navbar-brand"><a href="" class="link-light" >Libreria</a></h1>
    
    <?php if (!(isset($_SESSION['USER_ID']))) {?>
      <a class="link-light" class="nav-item" href="login">Login</a>
      <?php } else { ?>
        <a class="link-light" class="nav-item" href="logout">Logout</a>
    <?php }?>

  </div>
</header><?php }
}
