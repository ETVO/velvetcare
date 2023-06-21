<!DOCTYPE html>
<html lang="en">

<?php

$href = '';

$currentpage = $_SERVER['REQUEST_URI'];
if (!($currentpage == "/" || $currentpage == "/index.php" || $currentpage == "/index" || $currentpage == "")) {
    $href = 'index.php';
}

if (!isset($page_title))
    $page_title = 'Velvet Care';


$privacidade_link = '/politica-privacidade.php';

$GA_TRACKING_ID = 'G-JXHF9X3TYJ';

?>

<head>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo $GA_TRACKING_ID; ?>"></script>
    <script>
        if (localStorage.getItem('allowCookies') == 'deny') {
            removeGTag();
        }
        else {
            addGTag();
        }

        function addGTag() {
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                window.dataLayer.push(arguments);
            }
            gtag('js', new Date());

            gtag('config', '<?php echo $GA_TRACKING_ID; ?>');
        }

        function removeGTag() {
            window['ga-disable-<?php echo $GA_TRACKING_ID; ?>'] = true;
        }
    </script>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php include 'partials/meta-tags.php' ?>

    <link rel="shortcut icon" href="/assets/img/favicon.svg" type="image/x-icon">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

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
                        <a href="tel:+351912914920" class="btn btn-primary">
                            <span class="icon bi-telephone-fill"></span>
                            <span class="text">912 914 920</span>
                        </a>
                    </div>
                </div>
            </div>
        </nav>
    </header>