<!DOCTYPE html>
<html lang="en">

<?php 

$href = '';

$currentpage = $_SERVER['REQUEST_URI'];
if (!($currentpage == "/" || $currentpage == "/index.php" || $currentpage == "/index" || $currentpage == "")) {
    $href = 'index.php';
} 

if(!isset($page_title))
    $page_title = 'Velvet Care';

?>

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo $page_title; ?></title>

    <link rel="shortcut icon" href="/assets/img/favicon.svg" type="image/x-icon">

    <link rel="preload" as="style" href="/assets/fonts/Montserrat/font.css">

    <link rel="stylesheet" href="/assets/css/bootstrap.css">
    <link rel="stylesheet" href="/assets/css/main.css">
    <link rel="stylesheet" href="/assets/fonts/bootstrap-icons/bootstrap-icons.css">
</head>

<body>

    <header id="header">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="<?php echo $href; ?>#">
                    <img src="/assets/img/logo.svg" alt="VelvetCare">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMenu" aria-controls="navbarMenu" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="bi-list"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarMenu">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo $href; ?>#servicos">Serviços</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo $href; ?>#quem-somos">Quem Somos</a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link" href="<?php echo $href; ?>#blog">Blog</a>
                        </li> -->
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo $href; ?>#contacto">Contacto</a>
                        </li>
                    </ul>
                    <div class="action">
                        <a href="<?php echo $href; ?>#contacto" class="btn btn-primary">
                            <span class="icon bi-telephone-fill"></span>
                            <span class="text">912 914 920</span>
                        </a>
                    </div>
                </div>
            </div>
        </nav>
    </header>