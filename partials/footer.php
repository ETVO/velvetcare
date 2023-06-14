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
        <div class="logo">
            <img src="./assets/img/logo-white.svg" alt="">
        </div>
        <div class="row w-100">
            <div class="col">
                <div class="contacts">
                    <?php foreach ($contacts as $contact) : ?>
                        <div class="contact">
                            <span class="icon bi-<?php echo $contact['icon']; ?>"></span>
                            <div class="text">
                                <?php echo $contact['value']; ?>
                                <div class="obs"><?php echo $contact['obs'] ?? ''; ?></div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="col">
                <div class="footer-nav">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="#serviços">Serviços</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#quem-somos">Quem Somos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#blog">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contacto">Contacto</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col text-end">
                <div class="socials">
                    <?php foreach ($socials as $social) : ?>
                        <a href="<?php echo $social['value']; ?>" class="social bi-<?php echo $social['icon']; ?>"></a>
                    <?php endforeach; ?>
                </div>
                <div class="action">
                    <div class="caption">
                        <b>Dúvidas?</b> Ligue agora:
                    </div>
                    <a href="#contacto" class="btn btn-primary">
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

</body>

<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
<script src="/assets/js/main.js"></script>

</html>