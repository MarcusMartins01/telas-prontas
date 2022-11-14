<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastre-se</title>
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

        #voltar{
            height: 30px;
            width: 60px;
            margin-top: 30px;
            margin-left: 20px;
            color: black;
            background-color: white;
            padding: 0px 5px;
        }

        a{
            text-decoration: none;
            color: black;
        }

        #cad2{
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

    <button id="voltar"><a href="cadastrar.php">Voltar</a></button>

    <div class="form">
    <form>
        <h2>CADASTRO</h2>
        <label for="usuario">Informe o usuário</label>
        <input type="text" name="usuario" id="usuario">

        <label for="senha">Senha</label>
        <input type="text" name="senha" id="senha">

        <label for="v_senha">Confirme a senha</label>
        <input type="text" name="v_senha" id="v_senha">

        <button id="cad2"><a href="index.php">Enviar</a></button>
        </form>
    </div>
</body>
</html>