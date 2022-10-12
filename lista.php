<?php

include 'conexao.php';

$buscar_cadastros = "SELECT * FROM tb_cadastros";
$query_cadastros = mysqli_query($conexao, $buscar_cadastros);

?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>LISTA</title>
</head>

<style>
  body{
    background-color: #2c3034f8;
    /*max-width: 1700px;*/
    margin: auto;
}

p{
    max-width: 1700px;
    margin-top: 20px;
    margin-bottom: 10;
    font-weight: 800;
    font-size: 23px;
    color: white;
    margin-left: 47px;
}

th{
    text-align: center;
}

td{
    font-weight: 400;
    text-align: center;
}

thead {
   color: white;
   font-weight: 900;
   text-align: center;
}

.table>tbody {
    vertical-align: 0;
}

td div{
    background: none;
}

#x1{
    background-color: red;
}
</style>

<body>

        <table  class="table table-dark table-striped">
            <thead>
              <tr>
                <th scope="col">id</th>
                <th scope="col">Nome</th>
                <th scope="col">E-mail</th>
                <th scope="col">Telefone</th>
                <th scope="col">Senha</th>
                <th scope="col">Ações</th>

              </tr>
            </thead>
            <tbody>


            <?php
                while($receber_cadastros = mysqli_fetch_array($query_cadastros)){
                    echo "<td>".$receber_cadastros['id']."</td>";
                    echo "<td>".$receber_cadastros['nome']."</td>";
                    echo "<td>".$receber_cadastros['email']."</td>";
                    echo "<td>".$receber_cadastros['telefone']."</td>";
                    echo "<td>".$receber_cadastros['senha']."</td>";

                    echo "<td>

                    <a class='btn btn-sm btn-primary' href='editar.php?id=$receber_cadastros[id]'>Editar</a>
                    <a class='btn btn-sm btn-danger' href='excluir.php?id=$receber_cadastros[id]'>Excluir</a>
                    
                    </td>";
                echo "</tr>";
            }
               
            ?>

            </tbody>
        </table>
</body>
</html>