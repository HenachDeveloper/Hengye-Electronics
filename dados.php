<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $mensagem = $_POST['mensagem'];
        
        require 'vendor/autoload.php';
        
        // mobl@consistech.co.ao
        // m@bl.2020 @

        $from = new SendGrid\Email(null, $email);
        $subject = "Mensagem de contato";
        $to = new SendGrid\Email(null, "mobl@consistech.co.ao");
        $content = new SendGrid\Content("text/html", "Olá Conectapp, <br><br>Forumulario de Contactos<br><br>Nome: $nome<br>Email: $email <br>Mensagem: $mensagem");
        $mail = new SendGrid\Mail($from, $subject, $to, $content);
        
        $apiKey = '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';
        $sg = new \SendGrid($apiKey);

        $response = $sg->client->mail()->send()->post($mail);

        ?>

        <script>
            window.location = 'index.php';
            alert("Messagem enviada, <?php echo "$nome" ?>", );
        </script>

    </body>
</html>