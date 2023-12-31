<?php include 'cookies.php'; ?>

<footer id="footer">
    <div class="container">
        <a class="logo" href="<?= $logo_link; ?>">
            <img src="/assets/img/logo-white.svg" alt="<?php echo $page_title; ?>">
        </a>
        <div class="row">
            <div class="col-12 col-lg-4">
                <div class="contacts">
                    <?php foreach ($contacts as $contact) : ?>
                        <a class="contact" href="<?php echo $contact['link'] ?? '#contacto'; ?>">
                            <span class="icon bi-<?php echo $contact['icon']; ?>"></span>
                            <div class="text">
                                <?php echo $contact['content']; ?>
                                <div class="obs"><?php echo $contact['obs'] ?? ''; ?></div>
                            </div>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4 text-center text-sm-start">
                <div class="footer-nav">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <?php foreach ($menu_options as $option) :
                            $link = $option['link'];
                            $name = $option['name'];
                        ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo $link; ?>"><?php echo $name; ?></a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4 text-center text-sm-end">
                <div class="socials">
                    <?php foreach ($socials as $social) : ?>
                        <a href="<?php echo $social['link']; ?>" aria-label="<?php echo $social['icon']; ?>" class="social bi-<?php echo $social['icon']; ?>" target="_blank"></a>
                    <?php endforeach; ?>
                </div>
                <div class="action">
                    <p class="caption">
                        <b>Dúvidas?</b> Ligue agora:
                    </p>
                    <a href="tel:+351912914920" class="btn btn-primary">
                        <span class="icon bi-telephone-fill"></span>
                        <span class="text"><?= $main_tel; ?></span>
                    </a>
                </div>
            </div>
        </div>
        <div class="info">
            <a href="https://www.livroreclamacoes.pt/inicio" class="reclama" target="_blank">
                <img src="/assets/img/livro-reclamacoes.png" alt="Livro de Reclamações">
            </a>
            <div class="seg-social">
                <img src="/assets/img/seg-social.png" alt="Segurança Social">
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
                <a href="<?php echo $privacidade_link; ?>">Política de Privacidade</a>
                <a href="http://etvo.me" class="etvo" target="_blank">
                    <img src="/assets/img/etvo.svg" alt="Desenvolvido por etvo">
                </a>
            </div>
        </div>
    </div>
</div>

</body>

<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
<script src="/assets/js/main.js"></script>

<?php if ($is_blog) : ?>
    <script src="/assets/js/blog.js"></script>
<?php endif; ?>

</html>