<?php

$page_title = 'Página não ecnontrada...';

include './partials/header.php';

?>

<div class="error">
    <div class="container d-flex flex-column align-items-center">

        <div class="center-title">
            <div class="icon">
                <span class="bi-question-circle"></span>
            </div>
            <div class="wrap-title">
                <h1>404</h1>
            </div>
        </div>
        <div class="subtitle">Página não encontrada.</div>
        <div class="d-flex g-2 links">
            <a href="/">Voltar à Página Inicial</a>
            <a href="/blog/">Visitar o Blog</a>
        </div>
    </div>
</div>

<?php

include './partials/footer.php';

?>