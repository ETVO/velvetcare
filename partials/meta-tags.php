<?php

$meta_default = array(
    'page_url' => $page_url ?? 'http://' . $_SERVER['SERVER_NAME'],
    'page_title' => $page_title ?? 'VelvetCare',
    'page_date' => $page_date ?? '',
    'page_language' => 'pt-pt',
    'page_description' => 'Não pode prestar todo o cuidado de que o seu familiar precisa? Nós estamos aqui por si. Apoio domiciliário humanizado e individualizado para idosos ou dependentes.',
    'page_keywords' => 'apoio domiciliário, cuidados geriátricos, acompanhamento no domicílio, higiene e cuidados pessoais, atividades de vida diária, enfermagem em casa, gestão da medicação, estimulação cognitiva para idosos, fisioterapia domiciliar, consultas e serviços de saúde, cuidados psicológicos para idosos, materiais geriátricos e consumíveis, qualidade de vida na terceira idade, envelhecimento saudável, cuidado humanizado para idosos, assistência domiciliar especializada, socialização para idosos',
    'page_image' => 'http://' . $_SERVER['SERVER_NAME'] . '/assets/img/cuidado-velvetcare-hero.jpg'
);

foreach ($meta_default as $key => $value) {
    if (isset($$key)) {
        unset($meta_default[$key]);
    }
}

if (isset($yoast)) :
    echo $yoast;
else :
    extract($meta_default);

    $schema = [
        '@context' => 'https://schema.org',
        '@graph' => [
            [
                '@type'  => 'WebPage',
                '@id' => $page_url,
                'url' => $page_url,
                'name' => $page_title,
                'thumbnailUrl' => $page_image,
                'datePublished' => $page_date,
                'description' => $page_description,
                'inLanguage' => $page_language,
                'potentialAction' => [[
                    '@type' => 'ReadAction',
                    'target' => [$page_url]
                ]],
            ]
        ]
    ];

?>

    <title><?= $page_title; ?></title>

    <!-- Description -->
    <meta name="description" content="<?= $page_description; ?>">

    <!-- Keywords -->
    <meta name="keywords" content="<?= $page_keywords; ?>">
    
    <!-- Canonical -->
    <meta property="canonical" content="<?= $page_url; ?>">

    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="<?= $page_title; ?>">
    <meta property="og:description" content="<?= $page_description; ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?= $page_url; ?>">
    <meta property="og:image" content="<?= $page_image; ?>">

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?= $page_title; ?>">
    <meta name="twitter:description" content="<?= $page_description; ?>">
    <meta name="twitter:image" content="<?= $page_image; ?>">
    <script type="application/ld+json" class="yoast-schema-graph"><?= json_encode($schema); ?></script>

<?php endif;
