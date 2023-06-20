<?php
$services = array(
    [
        'name' => 'Higiene e acompanhamento no domicílio',
        'img' => '/assets/img/services/higiene-domicilio.jpg',
        'desc' => 'Aliquam in hendrerit urna. Pellentesque sit amet sapien fringilla, mattis ligula consectetur, ultrices mauris. Maecenas vitae mattis tellus. Nullam quis imperdiet augue. Vestibulum auctor ornare leo, non suscipit magna eu.'
    ],
    [
        'name' => 'Apoio nas atividades de vida diária',
        'img' => '/assets/img/services/apoio-vida-diaria.jpg',
        'desc' => 'Pellentesque sit amet sapien fringilla, mattis ligula consectetur, ultrices mauris. Maecenas vitae mattis tellus. Nullam quis imperdiet augue. '
    ],
    [
        'name' => 'Apoio na medicação',
        'img' => '/assets/img/services/apoio-medicacao.jpg',
        'desc' => 'Aliquam in hendrerit urna. Vestibulum auctor ornare leo, non suscipit magna eu.'
    ],
    [
        'name' => 'Acompanhamento a consultas e outros serviços',
        'img' => '/assets/img/services/acompanhamento-outros.jpg',
        'desc' => 'Hendrerit urna. Pellentesque sit amet sapien fringilla, mattis ligula consectetur, ultrices mauris. Maecenas vitae mattis tellus. Nullam quis Vestibulum auctor ornare leo, non suscipit magna eu.'
    ],
    [
        'name' => 'Acompanhamento psicológico',
        'img' => '/assets/img/services/acompanhamento-psicologico.jpg',
        'desc' => 'Aliquam in hendrerit urna. Pellentesque sit amet sapien fringilla, mattis ligula consectetur, ultrices mauris. Maecenas vitae mattis tellus. Nullam quis imperdiet augue. Vestibulum auctor ornare leo, non suscipit magna eu.Aliquam in hendrerit urna. Pellentesque sit amet sapien fringilla, mattis ligula consectetur, ultrices mauris. Maecenas vitae mattis tellus. Nullam quis imperdiet augue. Vestibulum auctor ornare leo, non suscipit magna eu.'
    ],
    [
        'name' => 'Sessões de fisioterapia',
        'img' => '/assets/img/services/fisioterapia.jpg',
        'desc' => 'Aliquam in hendrerit urna.'
    ],
    [
        'name' => 'Estimulação cognitiva',
        'img' => '/assets/img/services/estimulacao-cognitiva.jpg',
        'desc' => 'Aliquam in hendrerit urna. Pellentesque sit amet sapien fringilla, mattis ligula consectetur, ultrices mauris. Maecenas vitae mattis tellus. Nullam quis imperdiet augue. Vestibulum auctor ornare leo, non suscipit magna eu.'
    ],
    [
        'name' => 'Venda de materiais geriátricos',
        'img' => '/assets/img/services/materiais-geriatricos.jpg',
        'desc' => 'Aliquam in hendrerit urna. Pellentesque sit amet sapien fringilla, mattis ligula consectetur, ultrices mauris. Maecenas vitae mattis tellus. Nullam quis imperdiet augue. Vestibulum auctor ornare leo, non suscipit magna eu.'
    ],
);

?>
<section class="services" id="servicos">
    <div class="container default">
        <div class="side-title">
            <h2 class="fs-4">Serviços</h2>
        </div>
        <div class="services-view accordion accordion-flush" id="servicesAccordion">
            <div class="row g-4 row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-3 row-cols-xl-4 justify-content-center">
                <?php foreach ($services as $key => $service) :
                    $id = "serviceInfo$key"; ?>
                    <div class="col">
                        <div class="service" data-bs-toggle="collapse" data-bs-target="#<?php echo $id; ?>" aria-expanded="false" aria-controls="<?php echo $id; ?>">
                            <h3 class="name fs-5">
                                <?php echo $service['name']; ?>
                            </h3>
                            <img src="<?php echo $service['img']; ?>" alt="">
                        </div>
                        <?php if (isset($service['desc'])) : ?>
                            <div class="collapse accordion-collapse" id="<?php echo $id; ?>" data-bs-parent="#servicesAccordion">
                                <div class="service-info">
                                    <h3 class="name fs-4">
                                        <?php echo $service['name']; ?>
                                    </h3>
                                    <p class="description">
                                        <?php echo $service['desc']; ?>
                                    </p>
                                    <div class="cta">
                                        <a href="#contacto" class="btn btn-primary">CONTACTE-NOS</a>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>

                <?php endforeach; ?>
                <?php foreach ($services as $key => $service) :
                    $id = "serviceInfo$key"; ?>

                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>