<?php

$contacts = array(
    [
        'icon' => 'phone',
        'value' => '912 914 920',
        'obs' => '* chamada para rede móvel nacional'
    ],
    [
        'icon' => 'envelope',
        'value' => 'info@velvetcare.pt',
    ],
    [
        'icon' => 'geo-alt',
        'value' => 'Av. de São Félix, 878.<br>4760-490. V. N. Famalicão',
        'obs' => 'ao lado da Farmácia de Gondifelos'
    ],
);

$socials = array(
    [
        'icon' => 'facebook',
        'value' => 'https://www.facebook.com/velvetcare.saude/'
    ],
    [
        'icon' => 'instagram',
        'value' => 'https://www.instagram.com/velvetcare.saude/'
    ],
)

?>

<footer id="footer">
    <div class="container">
        <a class="logo" href="#">
            <img src="./assets/img/logo-white.svg" alt="">
        </a>
        <div class="row">
            <div class="col-12 col-lg-4">
                <div class="contacts">
                    <?php foreach ($contacts as $contact) : ?>
                        <a class="contact" href="<?php echo $contact['link'] ?? '#contacto'; ?>">
                            <span class="icon bi-<?php echo $contact['icon']; ?>"></span>
                            <div class="text">
                                <?php echo $contact['value']; ?>
                                <div class="obs"><?php echo $contact['obs'] ?? ''; ?></div>
                            </div>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4 text-center text-sm-start">
                <div class="footer-nav">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="#servicos">Serviços</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#quem-somos">Quem Somos</a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link" href="#blog">Blog</a>
                        </li> -->
                        <li class="nav-item">
                            <a class="nav-link" href="#contacto">Contacto</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4 text-center text-sm-end">
                <div class="socials">
                    <?php foreach ($socials as $social) : ?>
                        <a href="<?php echo $social['value']; ?>" class="social bi-<?php echo $social['icon']; ?>" target="_blank"></a>
                    <?php endforeach; ?>
                </div>
                <div class="action">
                    <p class="caption">
                        <b>Dúvidas?</b> Ligue agora:
                    </p>
                    <a href="tel:+351912914920" class="btn btn-primary">
                        <span class="icon bi-telephone-fill"></span>
                        <span class="text">912 914 920</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="info">
            <a href="" class="reclama">
                <img src="/assets/img/livro-reclamacoes.png" alt="">
            </a>
            <div class="seg-social">
                <img src="/assets/img/seg-social.png" alt="">
                <div class="text">
                    <b>SEGURANÇA SOCIAL</b><br>
                    Título de Autorização de Funcionamento: 09/2023
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="bottom">
    <div class="container">
        <div class="wrap">
            <div class="copyrights">
                <?php echo date('Y'); ?> &copy; <a href="https://velvetcare.pt">VelvetCare</a>. Todos os direitos reservados.
            </div>
            <div class="links">
                <a href="#">Política de Privacidade</a>
                <!-- &nbsp;&bull;&nbsp; -->
                <a href="http://etvo.me" class="etvo" target="_blank">
                    <img src="assets/img/etvo.svg" alt="">
                </a>
            </div>
        </div>
    </div>
</div>

</body>

<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
<script src="/assets/js/main.js"></script>
<!-- <link rel="stylesheet" href="/assets/fonts/Lora/font.css"> -->

</html>