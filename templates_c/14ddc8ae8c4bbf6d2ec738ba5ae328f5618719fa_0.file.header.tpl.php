<?php
/* Smarty version 4.2.1, created on 2022-10-15 20:19:40
  from 'C:\xampp\htdocs\proyect\TPE\templates\gral\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634af9bc284b13_63724338',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '14ddc8ae8c4bbf6d2ec738ba5ae328f5618719fa' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyect\\TPE\\templates\\gral\\header.tpl',
      1 => 1665857977,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634af9bc284b13_63724338 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
  <base href="<?php echo BASE_URL;?>
">

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <title>Libreria</title>
</head>

<body>
<header><h1>Libreria</h1></header>
<?php if (!(isset($_SESSION['USER_ID']))) {?>
    <a href="login">Login</a>
    <?php } else { ?>
    <a href="logout">Logout</a>
<?php }
}
}
