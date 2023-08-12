<?php
    if(isset($_POST["enviar"])){  

    // Multiple recipients, note the comma
    $to = 'jessicamoreirars09@gmail.com, jessica.moreira.roso@gmail.com';

    $subject = 'Assunto';

    $message =' 
    <html>
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Redefinição de senha</title>
        </head>
        <body>
            <h3>Solicitação para troca de senha</h3>
            <p>teste 3</p>
        </body>
    </html>
    ';
    $erro[]="erro ao receber Post";
    // To send HTML mail, the Content-type header must be set use "Content-type: text/htmll"
        if(mail($to, $subject, $message, "Content-type: text/htmll")){
                $erro[]="Senha enviada com sucesso";
        }else{
            $erro[]="erro ao enviar email";
        }
    }

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Envio de emailcom PHP</title>
</head>
<body>
    <?php 
        echo"<p>".$erro[0]."</p>"; 
    ?>
    <form action="" method="POST">
        <input type="email" name="email" require>
        <input name="enviar" type="submit" value="enviar">
    </form>
</body>
</html>