<?php

include CONTROL_DIR . '/form_util.php';

$form_message = isset($_GET['form_message'])
    ? $_GET['form_message']
    : '';

$contact = $blocks['contact'];

$contact_model = get_model('contact');

$form_status = isset($_GET['form_status'])
    ? $_GET['form_status']
    : '';

$form_message = isset($_GET['form_message'])
    ? $_GET['form_message']
    : '';

?>

<section class="contacto center-section" id="contacto">
    <div class="container default">
        <div class="wrap">
            <div class="center-title">
                <div class="icon">
                    <span class="bi-chat-square-text"></span>
                </div>
                <div class="wrap-title">
                    <h2 class="fs-4"><?= $contact['title']; ?></h2>
                </div>
            </div>
            <div class="content">
                <p>
                    <?= $contact['subtitle']; ?>
                </p>
            </div>

            <div class="form">
                <div class="form-header">
                    <h3><?= $contact['form_title']; ?></h3>
                    <div class="d-flex">
                        <p class="desc">
                            <?= $contact['form_desc']; ?>
                        </p>
                    </div>
                </div>
                <form id="contact-form" action="<?= CONTROL_URL . '/send_mail.php' ?>" method="post" novalidate>
                    <input type="hidden" name="form-anchor" value="#contacto">
                    <div id="form-message" class="<?php if ($form_status) echo $form_status ?>">
                        <div class="message">
                            <?php echo $form_message; ?>
                        </div>
                    </div>
                    <?php
                    render_form_fields($contact_model['fields']);
                    ?>
                    <?php if (isset($contact_model['honeypot'])) :
                        $honey_name = $contact_model['honeypot']; ?>
                        <div class="special-field">
                            <input type="text" name="<?= $honey_name; ?>" class="form-control" placeholder="Honey">
                        </div>
                    <?php endif; ?>
                    <div class="d-flex">
                        <button type="submit" class="btn btn-primary">
                            ENVIAR
                            <span class="bi-arrow-clockwise" id="spinner" style="display: none;"></span>
                        </button>
                    </div>
                </form>
            </div>

            <h3 class="fs-4 contacts-title">
                Contactos
            </h3>
            <div class="contacts row row-cols-1 row-cols-md-2 row-cols-xl-3 m-0 w-100">
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
    </div>
</section>
<img src="/assets/img/fibonacci-lg-dark.svg" alt="" class="fibonacci-double d-none d-sm-block">
<img src="/assets/img/fibonacci-sm-dark.svg" alt="" class="fibonacci-double d-block d-sm-none">