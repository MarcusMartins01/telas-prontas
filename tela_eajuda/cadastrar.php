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
            margin-left: 38%;
            margin-top: 100px;
            background-color: rgb(210, 245, 255);
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

    <form>
        <h2>CADASTRO</h2>
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome">

        <label for="sobrenome">Sobrenome</label>
        <input type="text" name="sobrenome" id="sobrenome">

        <label for="sexo">Sexo</label>
        <input type="text" name="sexo" id="sexo">

        <label for="email">Email</label>
        <input type="text" name="email" id="email">

        <label for="cpf">CPF</label>
        <input type="text" name="cpf" id="cpf">

        <label for="cep">CEP</label>
        <input type="text" name="cep" id="cep">

        <button id="cad1"><a href="c_dois.php" id="botao">Enviar</a></button>
    </form>
</body>
</html>