<?php

if(isset($_POST(['email']) && !empty($_POST(['email'])))){

$nome = addcslashes($_POST(['name']))
$telefone = addcslashes($_POST(['telefone']))
$email = addcslashes($_POST(['email']))
$mensagem = (addcslashes$_POST(['mensagem']))


$to = "berbecue@gmail.com";
$subject = "contato do forms do site";
$body = "Nome: ".$nome. "\n"
        "Telefone:".$telefone. "\n"
        "Email:".$email. "\n"
        "Mensagem:".$mensagem. "\n"
$header = "From:berbecue@gmail.com"."\r\n"
            ."Reply-To:".$email."\r\n"
            ."X=Mailer:PHP

}
?>