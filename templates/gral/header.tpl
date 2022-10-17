<!DOCTYPE html>
<html lang="en">

<head>
  <base href="{BASE_URL}">

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
  
    <h1 class="navbar-brand"><a href="libreria" class="link-light" >Libreria</a></h1>
    
    {if !isset($smarty.session.USER_ID)}
      <a class="link-light" class="nav-item" href="login">Login</a>
      {else}
        <a class="link-light" class="nav-item" href="logout">Logout</a>
    {/if}

  </div>
</header>