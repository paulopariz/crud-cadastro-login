  <?php

  if(isset($_POST['submit'])){

    include 'conexao.php';

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $senha = $_POST['senha'];


    $result = mysqli_query($conexao, "INSERT INTO tb_cadastros(nome,email,telefone,senha)
    VALUES ('$nome','$email','$telefone','$senha')");

  }

?>   




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <!--bootstrap 5!-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="style.css">

    <!--icons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">    
</head>
<body>
 
        <nav>
          <ul class="nav">
              <li class="nav-item">
                <a class="nav-link" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Blog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
              </li>
          </ul>
          <ul class="nav">
            
              <li class="nav-item" >
                <a class="nav-link" id="logInNav" href="#">Log in</a>
              </li>
              <li class="nav-item" id="signInNav">
                <a class="nav-link" href="#">Sign in</a>
              </li>
              <div>
                <input type="checkbox" class="checkbox x2" id="chk" />
                <label class="label" for="chk">
                  <i class="bi bi-moon"></i>
                  <i class="bi bi-brightness-high"></i>
                  <div class="ball"></div>
                </label>
              </div>
          </ul>
        </nav>



        <!--ECLIPSE FUNDO-->
        <main>
          <div class="container-left">
        
            <section>
              <h1>Sign In to Recharge Direct</h1>
              <p>if you dont't an account you can <span>Register here!</span></p>
            </section>
            
            <div class="eclipse1"></div>
            <div class="eclipse2"></div>
          </div>

          <div class="container-center">
            <div class="character">
              <img src="assets/character.png" alt="">
            </div>
          </div>

            <form id="form" action="cadastro.php" method="POST">
            <div class="form-group">
                  <input type="text" placeholder="Name" name="nome" class="inputs required" oninput="nameValidate()" value="<?php echo $nome; ?>">  
                  <span class="span-required">Nome deve ter no mínimo 3 caracteres</span>            
                </div>
                <div class="form-group">
                  <input class="inputs required" placeholder="E-mail" oninput="emailValidate()" type="text" name="email" value="<?php echo $email; ?>">
                  <span class="span-required" >Digite um email válido</span>           
                </div>
                <div class="form-group">
                  <input class="inputs required" placeholder="Phone" oninput="telValidate()" type="tel" name="telefone" value="<?php echo $telefone; ?>">
                  <span class="span-required" >Digite um número de telefone válido</span>           
  
  
                </div> 
                <div class="form-group">
                  <input class="inputs required" placeholder="Password" oninput="mainPasswordValidate()" type="text" name="senha" value="<?php echo $senha; ?>"> 
                  <span class="span-required" >Digite uma senha com no mínimo 8 caracteres</span>           
               
                </div>
  
                <div class="form-group">
                  <input class="inputs required" placeholder="Confirm password" oninput="comparePassword()" type="text" name="senha">    
                  <span class="span-required">Senhas devem ser compatíveis</span>           
            
                </div>
  
            
                <input  value="Sign In" type="submit" class="btn btn-primary" name="submit" id="submit"></input>

                <article>
                  <div class="continue">
                    <hr>
                    <p>Or continue with</p>
                    <hr>
                  </div>
                  <section>
                    <div><img src="assets/google.png" alt="google"></div>
                    <div><img src="assets/apple.png" alt="aplle"></div>
                    <div><img src="assets/facebook.png" alt="facebook"></div>
                  </section>
                </article>
              </form>
        </main>



        <script src="validacao.js"></script>
</body>
</html>