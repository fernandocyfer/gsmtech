<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {


    //Pegas os dados do formulário
    $nome       =   $_POST['nome'];
    $email      =   $_POST['email'];
    $telefone   =   $_POST['telefone'];
    $mensagem   =   $_POST['mensagem'];


    //envia o e-mail
    $para       =   'contato@cyfer.com.br';
    $assunto    =   'Enviado do site gsmtech.com.br';
    $corpo      =   "Nome: $nome\nEmail: $email\nTelefone: $telefone\nMensagem: $mensagem";

    
    //Usa a função mail para fazer o envio
    mail($para, $assunto, $corpo);


    echo "<h3>Mensagem enviada com sucesso!</h3>";
    
}

?>