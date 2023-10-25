<?php

    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $msg = addslashes($_POST['msg']);

    $para = "pedroben681@gmail.com";
    $assunto = "Coleta de Dados - Cyber Tech";

    $corpo = "Nome: ".$nome."\n"."E-mail: ".$email."\n"."msg: ".$msg;

    $cabeca = "From: pedrofreitassantos2021@gmail.com"."\n"."Reply-to: ".$email."\n"."X=Mailer:PHP/".phpversion()

    if(mail($para,$assunto,$corpo,$cabeca)){
        echo("E-mail enviado com sucesso!");
    } else{
        echo("Houve um erro ao enviar o email")
    }

?>