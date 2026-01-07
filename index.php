<?php


    $nome = addslashes($_POST['name']);
    $email = addslashes($_POST['email']);
    $telefone = addslashes($_POST['phone']);

    $para ="luidoliver399@gmail.com";
    $assunto = "Coleta de dados - Intelogias";

    $corpo = "Nome: ".$nome. "\n". "E-mail: ".$email. "\n" ."Telefone:".$telefone;

    $cabeca = "From lulufofinho399@gmail.com". "\n". "Reply-to: ".$email. "\n"."X=Mailer:PHP/".phpversion();

    if(mail($para,$assunto,$corpo,$cabeca)){
        echo("E-mail enviado com sucesso");
    }else{
        echo("hove um erro");
    }

?>