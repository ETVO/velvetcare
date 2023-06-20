<?php
$quem = [
    'title' => 'Cuidados humanizados, com delicadeza e profissionalismo, para resgatar o “eu” em cada um de nossos utentes.',
    'content' => 'Na VelvetCare prestamos um serviço de apoio domiciliário diferenciado. Acreditamos na importância da manutenção da individualidade e da socialização para a qualidade de vida dos mais velhos. 
    <div class="destaque">
    A atenção aos idosos, na nossa visão, não se pode restringir aos cuidados de enfermagem e/ou higiene.
    </div>
    Sendo assim, proporcionamos serviços especializados de acompanhamento para atividades do dia a dia, como assistência em saídas e compras, gestão da medicação e estímulo às atividades cognitivas, entre tantos outros cuidados personalizados à medida das necessidades de cada pessoa atendida.'
]

?>

<section class="quem" id="quem-somos">
    <div class="container default">
        <img src="/assets/img/coracao.svg" class="heart">
        <div class="side-title">
            <h2 class="fs-4">Quem Somos</h2>
        </div>
        <div class="content">
            <h2 class="title fs-4">
                <?php echo $quem['title']; ?>
            </h2>

            <div>
                <?php echo $quem['content']; ?>
            </div>
        </div>
    </div>
</section>