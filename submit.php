<?php
$is_ajax = isset($_GET['ajax']) ? $_GET['ajax'] : false;
$form_anchor = isset($_POST['form-anchor']) ? $_POST['form-anchor'] : 'contact-form';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize form data
    $name = filter_input(INPUT_POST, 'name', FILTER_DEFAULT);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $tel = filter_input(INPUT_POST, 'tel', FILTER_DEFAULT);
    $message = filter_input(INPUT_POST, 'message', FILTER_DEFAULT);
    $honeypot = filter_input(INPUT_POST, 'website', FILTER_DEFAULT);

    // Validate honeycomb field
    if (!empty($website)) {
        http_response_code(405); // Set response code to indicate error

        echo json_encode($errors); // Send errors as JSON response
    }

    $errors = array(); // Array to store validation errors

    // Validate name
    if (empty($name)) {
        $errors['name'] = 'Campo Nome é obrigatório';
    }

    // Validate email
    if (empty($email)) {
        $errors['email'] = 'Campo Email é obrigatório';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = 'Email inválido';
    }

    // Validate telephone
    if (empty($tel)) {
        $errors['tel'] = 'Campo Telefone é obrigatório';
    }

    if (empty($errors)) {

        $to = 'info@velvetcare.pt'; // Replace with your email address
        $subject = 'Contacto Submetido no Formulário';

        $emailMessage = "Nome: $name\n";
        $emailMessage .= "Email: $email\n";
        $emailMessage .= "Telefone: $tel\n\n";
        $emailMessage .= "Mensagem:\n$message";

        $headers = "From: $name <$email>\r\n";
        $headers .= "Reply-To: $email\r\n";

        try {
            if (mail($to, $subject, $emailMessage, $headers)) {
                $response = "A sua mensagem foi recebida e será respondida em breve!";
            } else {
                $response = "Infelizmente ocorreu um erro ao enviar a sua mensagem. Por favor, tente novamente mais tarde.";
                http_response_code(400);
            }
        } catch (Exception $e) {
            $response = "Ocorreu um erro. Contacte o administrador. (" . $e->getMessage() . ")";
            http_response_code(400);
        }

        if ($is_ajax) {
            echo $response;
        }
    } else {
        if ($is_ajax) {
            echo json_encode($errors); // Send errors as JSON response
            http_response_code(400); // Set response code to indicate error
        } else {
            $redirect = "/?form_message=" . implode(', ', $errors) . "&$form_anchor";
            header("Location: $redirect");
        }
    }
}

if (!$is_ajax) {
    $page_title = 'Agradecemos pelo seu contacto!';
    include 'partials/header.php';

?>

    <section class="thank-you py-5">
        <div class="container">
            <h1 class="fs-2">Agradecemos pelo seu contacto!</h1>
            <p>A sua mensagem foi recebida com sucesso.</p>
        </div>
    </section>

<?php

    include 'partials/footer.php';
}
