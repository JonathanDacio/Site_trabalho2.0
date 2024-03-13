<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <title>Registrar</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--preSets--> <link rel="stylesheet" href="../cores.css">
    <!--Fonts--> <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
    <!--Icons--> <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/iconoir-icons/iconoir@main/css/iconoir.css"/>

    <link rel="stylesheet" href="_css/login.css"/>
</head>

<body>
    <div class="container">
        <form method="POST" action="configLogin.php" class="formLogin">

            <h4>Faça login</h4>

            <div class="input-section">
                <label>Email <span class="required-color">*</span></label>
                <input type="email" placeholder="Informe seu email" id="email" name= "email" required />
                <span id="email-error" class="hide required-color error-message">Email inválido</span>
                <span id="empty-email" class="hide required-color error-message">Campo obrigatório</span>
            </div>

            <div class="input-section">
                <label>Senha <span class="required-color">*</span></label>
                <input type="password" placeholder="Informe sua senha" id="password" name= "senha" required />
                <span id="password-error" class="hide required-color error-message">As senhas devem ter letras, símbolos especiais, números e comprimento >= 8</span>
                <span id="empty-password" class="hide required-color error-message">Campo obrigatório</span>
            </div>

            <a class="link" href="../Trabalho/esqueceu_a_senha.php">Esqueceu a senha</a>

         <input type="submit" name="submit" value="Acessar" class="btn" ?>
        </form>
        
        <div class="footer">

            <p>Ainda não possui uma conta?</p>
            <a class="link" href="cadastro.php">Cadastro</a>
        </div>
    </div> 

       
    <script src="register.js"></script>
</body>

</html>