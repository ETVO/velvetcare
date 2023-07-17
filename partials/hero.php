<?php
$hero = $blocks['hero'];
?>

<section class="hero">
    <div class="container">
        <div class="wrap row">
            <div class="col-12 col-lg-6 text">
                <h1 class="title">
                    <div class="intro">
                        <?= $hero['title']; ?>
                    </div>
                    <div class="highlight">
                        <?= $hero['super_title']; ?>
                    </div>
                </h1>
                <div class="action">
                    <?php if ($hero['action']) :
                        $link = $hero['action']['link'];
                        $text = $hero['action']['text'];
                    ?>
                        <a href="<?= $link; ?>" class="btn btn-primary">
                            <?= $text; ?>
                        </a>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-12 col-lg-6 image">
                <?php if ($hero['image']) : 
                    $src = $hero['image']['src'];
                    $alt = $hero['image']['alt'];
                    ?>
                    <img src="<?= $src; ?>" alt="<?= $alt; ?>">
                <?php else : ?>
                    <img src="/assets/img/cuidado-velvetcare-hero.jpg" alt="Cuidados humanizados, com delicadeza e profissionalismo, para resgatar o “eu” em cada um de nossos utentes.">
                <?php endif; ?>
            </div>
        </div>
    </div>
    <img src="/assets/img/fibonacci-1.svg" alt="" class="fibonacci">
</section>