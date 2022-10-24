<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login-tela</title>
    <link rel="stylesheet" href="style.css">


</head>
<body>
    <div class="main-login">
        <div class="login-esquerda">
            <h1>Bem-vindo<br></h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean consectetur in justo vitae luctus. Aenean sed mi sed odio molestie scelerisque ac at orci. Fusce mollis ligula lorem, et lacinia ipsum varius et. Fusce mollis ligula lorem, et lacinia ipsum varius et. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed a malesuada orci, vel ultrices ipsum.</p>
        </div>
        
        <div class="login-direita">

            <div class="card-login">
                <h1>Login</h1>
                 <form action="telaBemvindo.php" method="post" > 
                    <div class="textfield">
                        
                        <label for="usuario">Usuário</label>
                        <input type="text" name="usuario" id='usuario' placeholder="Usuário" required>
                    </div>
        
                    <div class="textfield">
                        <label for="senha">Senha</label>
                        <input type="password" name="Senha" id="senha" placeholder= "Senha" required>   
                    </div>

                    <div class="buttons">
                        <button type="submit" class="button-enviar" name="submit" value="Enviar">Enviar</button>
                                
                        <button type="reset" class="button-cancelar" >Cancelar</button>
                        
                    </div>
                 </form>  
            </div>
        </div>    

        
    </div>

    <script src="funcao.js"></script>
</body>
</html>