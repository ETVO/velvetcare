<?php

$meta_default = array(
    'page_description' => 'Não pode prestar todo o cuidado de que o seu familiar precisa? Nós estamos aqui por si. Apoio domiciliário humanizado e individualizado para idosos ou dependentes.',
    'page_keywords' => 'apoio domiciliário, cuidados geriátricos, acompanhamento no domicílio, higiene e cuidados pessoais, atividades de vida diária, enfermagem em casa, gestão da medicação, estimulação cognitiva para idosos, fisioterapia domiciliar, consultas e serviços de saúde, cuidados psicológicos para idosos, materiais geriátricos e consumíveis, qualidade de vida na terceira idade, envelhecimento saudável, cuidado humanizado para idosos, assistência domiciliar especializada, socialização para idosos',
    'page_image' => '/assets/img/cuidado-velvetcare-hero.jpg'
);

foreach($meta_default as $key => $value) {
    if(isset($$key)) {
        unset($meta_default[$key]);
    }
}
extract($meta_default);

?>

<title><?php echo $page_title; ?></title>

<!-- Description -->
<meta name="description" content="<?php echo $page_description; ?>">

<!-- Keywords -->
<meta name="keywords" content="<?php echo $page_keywords; ?>">

<!-- Open Graph Meta Tags -->
<meta property="og:title" content="<?php echo $page_title; ?>">
<meta property="og:description" content="<?php echo $page_description; ?>">
<meta property="og:type" content="website">
<meta property="og:url" content="<?php echo $page_description; ?>">
<meta property="og:image" content="<?php echo $page_image; ?>">

<!-- Twitter Meta Tags -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="<?php echo $page_title; ?>">
<meta name="twitter:description" content="<?php echo $page_description; ?>">
<meta name="twitter:image" content="<?php echo $page_image; ?>">