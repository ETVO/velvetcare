<?php $local = $blocks['local']; ?>

<section class="local center-section" id="localizacao">
    <div class="container default">
        <div class="wrap">
            <div class="icon">
            <div class="center-title">
                <div class="icon">
                    <span class="bi-pin-map"></span>
                </div>
                <div class="wrap-title">
                    <h2 class="fs-4"><?= $local['title']; ?></h2>
                </div>
            </div>
            <div class="content">
                <p>
                    <?= $local['content']; ?>
                </p>
            </div>
        </div>
    </div>
</section>
<img src="/assets/img/fibonacci-lg-dark.svg" alt="" class="fibonacci-double d-none d-sm-block">
<img src="/assets/img/fibonacci-sm-dark.svg" alt="" class="fibonacci-double d-block d-sm-none">