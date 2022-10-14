 <?php


include_once('conexao.php');

if(!empty($_GET['id']))
{
    $id = $_GET['id'];
    $sqlSelect = "SELECT * FROM tb_cadastros WHERE id=$id";
    $result = $conexao->query($sqlSelect);
    if($result->num_rows > 0)
    {
        while($receber_cadastros = mysqli_fetch_assoc($result))
        {
            $nome = $receber_cadastros['nome'];
            $senha = $receber_cadastros['senha'];
            $email = $receber_cadastros['email'];
            $telefone = $receber_cadastros['telefone'];
        }
    }
    else
    {
        header('conexao: lista.php');
    }
}
else
{
    header('Location: lista.php');
}

?> 




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


</head>

<style>
  body{
    background: #14162E;  
  }

  form{
    max-width: 400px;
    margin: auto;
    margin-top: 100px;
   
  }

  h1{
    color: white;
    text-align: center;
    margin-bottom: 20px;
  }

  form{
    background-color: #23253c;
    padding: 100px 300px;
    border-radius: 20px;
    margin-bottom: 70px;
  }

  section{
    margin-left: -200px;
    width: 400px;
  }

  input{
    width: 400px;
    height: 50px;
    margin-top: 10px;
    border-radius: 10px;
    border: none;
    padding-left: 20px;
    outline: none;
  }
  .form-group span{
    display: none;
    font-size: 13px;
    color: rgb(204, 14, 14);
    margin-top: 3px;
    width: 290px;
}
.buttons{
  display: flex;
  gap: 30px;
}
.buttons input{
  width: 200px;
}

.buttons button{
  width: 185px;
  height: 50px;
  margin-top: 10px;
  border-radius: 10px;
  border: none;
  cursor: pointer;
  background-color: rgb(204, 14, 14);
  color: white;
}

#submit{
  background: #4461F2;
  color: white;
  cursor: pointer;
  padding: 0;
}
  span{
    display: none;
  }
  
  
</style>

<body>


 
          <main>
            <form action="salvarEdicao.php" method="POST">
            <section>
            <h1>Editar usuário</h1>

              <div class="form-group">
                    <input placeholder="Nome" type="text" name="nome" class="inputs required" oninput="nameValidate()" value="<?php echo $nome; ?>">
                    <span class="span-required">Nome deve ter no mínimo 3 caracteres</span>
                  </div>
                  <div class="form-group">
                    <input placeholder="E-mail" class="inputs required" oninput="emailValidate()" type="email" name="email" value="<?php echo $email; ?>">
                    <span class="span-required" >Digite um email válido</span>
                  </div>
                  <div class="form-group">
                    <input placeholder="telefone" class="inputs required" oninput="telValidate()" type="tel" name="telefone" value="<?php echo $telefone; ?>">
                    <span class="span-required" >Digite um número de telefone válido</span>
                  </div>
                  <div class="form-group">
                    <input placeholder="Senha" class="inputs required" oninput="mainPasswordValidate()" type="password" name="senha" value="<?php echo $senha; ?>">
                    <span class="span-required" >Digite uma senha com no mínimo 8 caracteres</span>
                  </div>
                  <div class="form-group">
                    <input placeholder="Confirme a senha" class="inputs required" oninput="comparePassword()" type="password" name="senha">
                    <span class="span-required" >Senhas devem ser compatíveis</span>
                  </div>
              
                  <div class="buttons">
                    <input type="hidden" name="id" value=<?php echo $id;?>>
                    <input value="Salvar" type="submit" name="update" id="submit">

                    <a href="lista.php"><button>Cancelar</button></a>
                  </div>
            </section>
              </form>
          </main>

      <script src="validacao.js"></script>
</body>
</html>