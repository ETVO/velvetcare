<?php

$page_title = 'VelvetCare';
$body_class = 'home';
$index_include = true;

include_once 'integrate.php';

$content = get_data('content');
$blocks = filter_blocks($content['blocks']);

include './partials/header.php';
include './partials/hero.php';
include './partials/services.php';
include './partials/local.php';
include './partials/quem.php';
include './partials/contacto.php';


include './partials/footer.php';
