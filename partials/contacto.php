<?php

$contacts = array(
    [
        'icon' => 'phone',
        'value' => '912 914 920',
        'obs' => '* chamada para rede móvel nacional'
    ],
    [
        'icon' => 'geo-alt',
        'value' => 'Av. de São Félix, 878.<br>4760-490. V. N. Famalicão',
        'obs' => 'ao lado da Farmácia de Gondifelos'
    ],
    [
        'icon' => 'envelope',
        'value' => 'info@velvetcare.pt',
    ],
);

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
                    <h2 class="fs-4">Contacto</h2>
                </div>
            </div>
            <div class="content">
                <p>
                    Tem um familiar que necessita da assistência da Velvetcare?
                </p>
            </div>

            <div class="form">
                <div class="form-header">
                    <h3 class="fs-4">Entre em contacto</h3>
                    <div class="d-flex">
                        <p class="desc">
                            para elaborarmos um plano personalizado de cuidados de saúde.
                        </p>
                    </div>
                </div>
                <form id="contact-form" action="submit.php" method="post" novalidate>
                    <input type="hidden" name="form-anchor" value="#contacto">
                    <div id="form-message" class="<?php if ($form_message) echo 'error' ?>">
                        <div class="message">
                            <?php echo $form_message; ?>
                        </div>
                    </div>
                    <div class="field">
                        <input type="text" name="name" class="form-control" placeholder="Nome" required>
                        <div class="invalid-feedback">
                            Por favor insira o seu nome.
                        </div>
                    </div>
                    <div class="field">
                        <input type="email" name="email" class="form-control" placeholder="Email" required>
                        <div class="invalid-feedback">
                            Por favor insira um email válido.
                        </div>
                    </div>
                    <div class="field">
                        <input type="tel" name="tel" class="form-control" placeholder="Telefone" required>
                        <div class="invalid-feedback">
                            Por favor insira o seu telefone.
                        </div>
                    </div>
                    <div class="field">
                        <textarea name="message" class="form-control" rows="4" placeholder="Mensagem" required></textarea>
                    </div>
                    <div class="special-field">
                        <input type="text" name="website" class="form-control" placeholder="Website">
                    </div>
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
                            <?php echo $contact['value']; ?>
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