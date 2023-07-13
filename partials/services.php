<?php
$services = array(
    [
        'name' => 'Higiene e acompanhamento no domicílio',
        'img' => '/assets/img/services/higiene-domicilio.jpg',
        'desc' => 'Os nossos profissionais vão até a sua casa para garantir cuidados personalizados na higiene diária, sempre respeitando a privacidade, a individualidade e o bem-estar do seu familiar.'
    ],
    [
        'name' => 'Apoio nas atividades de vida diária',
        'img' => '/assets/img/services/apoio-vida-diaria.jpg',
        'desc' => 'Facilitamos a rotina dos idosos, ajudando-os nas tarefas mais simples como vestir-se, alimentar-se e na estimulação para realizar outras atividades essenciais, promovendo a autonomia e a segurança.'
    ],
    [
        'name' => 'Apoio na medicação',
        'img' => '/assets/img/services/apoio-medicacao.jpg',
        'desc' => 'Cuidamos para que a medicação seja tomada corretamente, garantindo que os idosos recebam os medicamentos adequados e no momento certo, assegurando a sua saúde e o seu bem-estar. Dispomos de uma equipa de profissionais, que poderá auxiliar na compra, entrega e preparação da medicação.'
    ],
    [
        'name' => 'Acompanhamento a consultas e outros serviços',
        'img' => '/assets/img/services/acompanhamento-outros.jpg',
        'desc' => 'Estamos presentes para acompanhar os idosos em consultas médicas e outros serviços de saúde, mas também, por exemplo, às compras ou em passeios de lazer, garantindo que recebam o apoio necessário e se sintam seguros durante as saídas de casa.'
    ],
    [
        'name' => 'Acompanhamento psicológico',
        'img' => '/assets/img/services/acompanhamento-psicologico.jpg',
        'desc' => 'Oferecemos apoio emocional especializado para lidar com questões como a solidão, ansiedade e tristeza que podem acomoter os mais velhos com o passar dos anos. Esse acompanhamento promove o bem-estar mental e a qualidade de vida dos idosos.'
    ],
    [
        'name' => 'Estimulação cognitiva',
        'img' => '/assets/img/services/estimulacao-cognitiva.jpg',
        'desc' => 'Promovemos atividades que estimulam a memória, a atenção e a cognição dos idosos, mantendo as suas mentes ativas e fortalecendo as suas capacidades cognitivas e motoras.'
    ],
    [
        'name' => 'Sessões de fisioterapia',
        'img' => '/assets/img/services/fisioterapia.jpg',
        'desc' => 'Os nossos fisioterapeutas especializados poderão realizar sessões personalizadas ao domicílio dos idosos, com o objetivo de promover a mobilidade, fortalecer a musculatura e melhorar a qualidade de vida.'
    ],
    [
        'name' => 'Venda de materiais geriátricos e consumíveis',
        'img' => '/assets/img/services/materiais-geriatricos.jpg',
        'desc' => 'Dispomos de uma ampla gama de materiais geriátricos e consumiveis de qualidade. Fazemos entregas no seu domicílio, ajudando a diminuir a preocupação com a falta de produtos, como luvas, máscaras e fraldas geriátricas, por exemplo.'
    ],
);

$services = $blocks['services'];

?>
<section class="services" id="servicos">
    <div class="container default">
        <div class="side-title">
            <h2 class="fs-4">
                <?= $services['title']; ?>
            </h2>
        </div>
        <div class="services-view accordion accordion-flush" id="servicesAccordion">
            <div class="row g-4 row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-3 row-cols-xl-4 justify-content-center">
                <?php foreach ($services['services'] as $key => $service) :
                    $id = "serviceInfo$key"; ?>
                    <div class="col">
                        <div class="service" data-bs-toggle="collapse" data-bs-target="#<?php echo $id; ?>" aria-expanded="false" aria-controls="<?php echo $id; ?>">
                            <h3 class="name fs-5">
                                <?php echo $service['name']; ?>
                            </h3>
                            <img src="<?php echo $service['image']; ?>" alt="<?php echo $service['description']; ?>">
                        </div>
                        <?php if (isset($service['description'])) : ?>
                            <div class="collapse accordion-collapse" id="<?php echo $id; ?>" data-bs-parent="#servicesAccordion">
                                <div class="service-info">
                                    <h3 class="name fs-4">
                                        <?php echo $service['name']; ?>
                                    </h3>
                                    <p class="description">
                                        <?php echo $service['description']; ?>
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