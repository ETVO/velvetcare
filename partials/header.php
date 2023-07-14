<?php

setlocale(LC_ALL, 'pt_PT');

$href = '';

$currentpage = $_SERVER['REQUEST_URI'];
if (!($currentpage == "/" || $currentpage == "/index.php" || $currentpage == "/index" || $currentpage == "")) {
    $href = '/';
}

$logo_link = ($href == '') ? '#' : $href;

$menu_options = array(
    array(
        'name' => 'Serviços',
        'link' => $href . '#servicos'
    ),
    array(
        'name' => 'Quem Somos',
        'link' => $href . '#quem-somos'
    ),
    array(
        'name' => 'Blog',
        'link' => '/blog/'
    ),
    array(
        'name' => 'Contacto',
        'link' => $href . '#contacto'
    ),
);

if (!isset($page_title))
$page_title = 'VelvetCare';

$is_blog = $is_blog ?? false;

$privacidade_link = '/politica-privacidade.php';

$GA_TRACKING_ID = 'G-JXHF9X3TYJ';

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo $GA_TRACKING_ID; ?>"></script>
    <script>
        if (localStorage.getItem('allowCookies') == 'deny') {
            removeGTag();
        } else {
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

    <?php include dirname(__FILE__) . '/meta-tags.php' ?>

    <link rel="shortcut icon" href="/assets/img/favicon.svg" type="image/x-icon">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="/assets/css/bootstrap.css">
    <link rel="stylesheet" href="/assets/css/main.css">
    <link rel="stylesheet" href="/assets/fonts/bootstrap-icons/bootstrap-icons.css">
    <?php if($is_blog): ?>
        <link rel="stylesheet" href="/assets/css/blog.css">
    <?php endif; ?>
</head>

<body class="<?= $body_class; ?>">

    <header id="header">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="<?php echo $href; ?>#">
                    <img src="/assets/img/logo.png" alt="VelvetCare">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMenu" aria-controls="navbarMenu" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="bi-list"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarMenu">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <?php foreach ($menu_options as $option) :
                            $link = $option['link'];
                            $name = $option['name'];
                        ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo $link; ?>"><?php echo $name; ?></a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                    <div class="action">
                        <a href="tel:<?= str_replace(' ', '', $main_tel); ?>" class="btn btn-primary">
                            <span class="icon bi-telephone-fill"></span>
                            <span class="text"><?= $main_tel; ?></span>
                        </a>
                    </div>
                </div>
            </div>
        </nav>
    </header>