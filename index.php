<?php

$page_title = 'VelvetCare';

// $content_json = file_get_contents('./manage/data/content.json');
// $content = json_decode($content_json, true, 512, JSON_FORCE_OBJECT);

// $blocks = $content['blocks'];

// $blocks = [];
// foreach($content['blocks'] as $key => $value){
//     $key = explode(':', $key)[0];
//     $blocks[$key] = $value;
// }

include './partials/header.php';
include './partials/hero.php';
include './partials/services.php';
include './partials/local.php';
include './partials/quem.php';
include './partials/contacto.php';


include './partials/footer.php';

?>