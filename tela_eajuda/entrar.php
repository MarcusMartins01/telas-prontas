<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrar</title>
    <link rel="stylesheet" href="style.css">
    <style>
        label,input{
            display: block;
            line-height: 30px;
            height: 30px;
            outline: none;
            font-size: 13pt;
            width: 100%;
        }

        form{
            display: inline-block;
            padding: 20px;
            width: 20%;
            margin-top: 100px;
            background-color: rgb(210, 245, 255);
        }

        a{
            text-decoration: none;
            color: black;
        }

        #cad1{
            display: block;
            line-height: 30px;
            height: 30px;
            outline: none;
            font-size: 13pt;
            width: 100%;
            margin-top: 10px;
            text-decoration: none;
            background-color: white;
        }

        #botao{
            text-decoration: none;
            color: black;
        }

        h2{
            text-align: center;
        }

        .form{
            text-align: center;
        }
    </style>
</head>
<body>
    
    <nav id="menu">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="voluntario.php">Voluntário</a></li>
            <li><a href="instituicao.php">Instituição</a></li>
            <li><a href="v_finan.php">Voluntário Financeiro</a></li>
            <li><a href="cadastrar.php">Cadastre-se</a></li>
            <li><a href="entrar.php">Entrar</a></li>
        </ul>
    </nav>

    <div class="form">
    <form>
        <h2>ENTRAR</h2>
        <label for="usuario">Usuário</label>
        <input type="text" name="usuario" id="usuario">

        <label for="senha">Senha</label>
        <input type="text" name="senha" id="senha">

        <button id="cad1"><a href="index.php" id="botao">Enviar</a></button>
        </form>
    </div>
</body>
</html>