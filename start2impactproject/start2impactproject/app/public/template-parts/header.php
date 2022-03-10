
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://bootswatch.com/5/flatly/bootstrap.css">
    <link rel="stylesheet" href="<?php echo ROOT_URL; ?> pages/assets/css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Ecommerce</title>
</head>
<body>

<nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
    <div class="container">
        <a class="navbar-brand" href="<?php echo ROOT_URL; ?>public?page=homepage">PHP Ecommerce</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">

        <ul class="navbar-nav me-auto mb-2 mb-md-0">
            <li class="nav-item">
            <a class="nav-link" href="<?php echo ROOT_URL; ?>public?page=about">Chi siamo</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="<?php echo ROOT_URL; ?>public?page=services">Servizi</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Prodotti</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="<?php echo ROOT_URL; ?>public?page=contact">Contatti</a>
            </li>
        </ul>

        <ul class="navbar-nav ml-auto mb-2 mb-md-0">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-bs-toggle="dropdown" aria-expanded="false">Area Riservata</a>
                <ul class="dropdown-menu" aria-labelledby="dropdown01">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
                </div>
            </li>
         </ul>

       </div>
    </div>
</nav>

<div id="main" class="container" style="margin-top: 100px;">
    <div class="row">
            <div class="col-9">