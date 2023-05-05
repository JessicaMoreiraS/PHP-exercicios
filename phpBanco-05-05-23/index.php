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
        <h1>PHP com Banco de Dados</h1>
    </head>
    <main>
        
    </main>
    <footer>

    </footer>

    <script>
        console.log("oii")
    </script>

    <?php
        //Definir as informacoews de conexão do banco de dados
        $servidor = "localhost";
        $usuario = "root"; //rot é raiz (pq no xampp nao precisa do usuario)
        $senha = "";
        $dbname = "bancodadosphp";

        //Criar a conexão 
        $conn = mysqli_connect($servidor, $usuario, $senha, $dbname);   //conn é de conexao / mysqli_connect() é padrão

        //Definir a consulta SQL para selecionar todos os registros da tabela "alunos"
        $result_tabela = "SELECT * FROM aluno";

        //Excutar a consulta SQL e armazenar o resultado em uma variavel
        $resultado_tabela = mysqli_query($conn, $result_tabela);    //query significa consulta

        //Imprimir os valores na página
        while($row_usuario = mysqli_fetch_assoc($resultado_tabela)){
            echo "ID: ". $row_usuario['id_aluno'] . "<br>";
            echo "Nome: ". $row_usuario['nome'] . "<br>";
            echo "Sobrenome: ". $row_usuario['sobrenome']. "<br><hr>";
        }
    ?>
</body>
</html>