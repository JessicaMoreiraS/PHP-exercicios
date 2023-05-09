<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Banco de Dados - POST</title>
    <style>
        body{
            background-color: beige;
        }
    </style>
</head>
<body>
    <head>
        <h1>PHP com Banco de Dados</h1>
    </head>
    <main>
        <form action="" method=POST>
            <label for="nome">Nome</label>
            <input type="text" id=nome name="nome">
            <label for="sobrenome">Sobrenome</label>
            <input type="text" id="sobrenome" name="sobrenome">

            <input type="submit" value="enviar">
        </form>
    </main>
    <footer>

    </footer>

    <script>
        console.log("oii")
    </script>

    <?php
        //rot é raiz (pq no xampp nao precisa do usuario)
        //Criar a conexão com Banco de dados
        $conn = mysqli_connect("localhost", "root", "", "bancodadosphp");   //conn é de conexao / mysqli_connect() é padrão

        //verifica se o formulario foi enviado pelo metodo POST
        if($_SERVER["REQUEST_METHOD"] == "POST"){   //$_SERVER["REQUEST_METHOD"] vefica o metodo do formulario
            $campo1 = $_POST['nome'];
            $campo2 = $_POST['sobrenome'];

            //Cria os valores que foram digitados no input e insere o registro na tabela
            $sql = "INSERT INTO aluno (nome, sobrenome) VALUES ('$campo1', '$campo2')";

            //Verifica se foi enviado ou se ocorreu erro
            if(mysqli_query($conn, $sql)){
                echo "Registro inserido com sucesso";
            }else{
                echo "Eroo ao inserir";
            }
        }
    ?>
</body>
</html>