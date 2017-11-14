<?php
header('Refresh: 2; URL=http://ferramentas.goodesign.com.br/framework/#formularios'); //escolha a pagina de retorno "Obrigado por enviar"
$to = 'contato@goodesign.com.br'; // adicione seu email

$assunto = $_POST['assunto'];

$headers = "From: " . strip_tags($_POST['email']) . "\r\n";
$headers .= "Reply-To: ". strip_tags($_POST['email']) . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

$message = $_POST['mensagem'];


mail($assunto, $message, $headers);
if ($_POST)
{
    $envioEmail = mail($to, $assunto, $message, $headers);

    if ($envioEmail)
    {
    ?>
        <div style="text-transform: uppercase; font-size: 1.2rem;letter-spacing: .2rem;font-weight: 600;font-family: 'Open Sans', sans-serif;color: #b4b4b4;
    width: 400px;    margin: 10% auto;" class="enviadosucesso">E-mail enviado com sucesso!</div>
    <?php
    }
    else
    {
    ?>
        <div class="erro">Erro no envio do e-mail.</div>
    <?php
    }
}
?>

