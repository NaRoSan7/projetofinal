<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <title>Entrar</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="img/icon.png" type="image/x-icon">
    <script src="javascript.js" defer></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Luckiest+Guy&family=Miltonian+Tattoo&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">

        <nav>
            <div class="nav-left"><a href="index.html">LUNA MOTH</a></div>
            <div class="nav-img"><a href="Index.html"><img src="gif/LunaIdle.gif"></a></div>
            <div class="nav-right">
                <ul>
                    <li><a href="aboutus.html">Sobre nós</a></li>
                    <li><a href="register.html">Cadastre-se</a></li>
                </ul>
            </div>
        </nav>

        <div class="form-screen">

            <form method="post" action="login.php" class="form-reveal">
                <h1>Login</h1>
                <label>E-mail</label>
                <input type="text" name="email"><br>
                <label>Senha</label>
                <input type="password" name="senha"><br>

                <span>Não se cadastrou? clique <a href="register.html">aqui</a></span>
                <button type="submit">Entrar</button>

            </form>
        </div>

    </div>
</body>
</html>