<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Banco de Dados</title>
    <style>
        body{
            background-color: green;
        }
    </style>
</head>
<body>
    <head>
        <h1>Bem Vindo ao PHP</h1>
    </head>
    <main>
        <p>Oi</p>
        <form action="" method="post"> 
            <input type="text" name="valor">
            <button type="submit">Enviar</button>
        </form>
    </main>
    <footer>

    </footer>

    <script>
        console.log("oii")
    </script>

    <?php
        echo "Teste";
        echo '<br>';
        $variavel = "Olá mundo";
        echo $variavel;

        echo '<br>';
        $n1 = 2;
        $n2 = 2;
        $soma = $n1 + $n2;
        echo $soma;
        echo "<br>";
        echo $n1 ." + ". $n2;   //usa o ponto(.) para concatenar 

        echo "<br>";
        if($soma >= 8){
            echo "aluno aprovado";
        }else{
            echo "aluno reprovado";
        };
        
        echo "<br>";

        //O php pega o valor de um input baseado no "name" e nao no ID
        $valorDigitado = $_POST['valor'];
        if(isset($valorDigitado)){
            echo "O valor do input é: ". $valorDigitado;
        }
    ?>
</body>
</html>