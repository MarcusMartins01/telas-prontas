<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eajuda</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .faixada{
            padding: 150px;
            background-size: 100% 100%;
            background-image: url(https://img.freepik.com/fotos-premium/duas-maos-fortes-estao-segurando-uma-a-outra-para-obter-ajuda-e-cooperacao_182527-5667.jpg);
            color: white;
            font-size: xx-large;
            text-align: center;
        }

        .voluntario{
            background-color: rgb(147, 233, 244);
            margin: 150px 50px;
            padding: 80px;
            display: inline-block;
        }

        .voluntario_f{
            background-color: rgb(147, 233, 244);
            margin: 150px 50px;
            padding: 80px;
            display: inline-block;
        }

        .instituicao{
            background-color: rgb(147, 233, 244);
            margin: 150px 50px;
            padding: 80px;
            display: inline-block;   
        }

        .juncao{
            margin-left: 330px;
        }

        #botao_index{
            background-color: white;
        }

        #botao_a{
            text-decoration: none;
            color: black;
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

    <div class="faixada">
        <h1>EAJUDA</h1>
    </div>

    <div class="juncao">
        <div class="voluntario">
            <button id="botao_index"><a href="voluntario.php" id="botao_a"><h2>Voluntário</h2></a></button>
        </div>

        <div class="voluntario_f">
            <button id="botao_index"><a href="v_finan.php" id="botao_a"><h2>Voluntário Financeiro</h2></a></button>
        </div>

        <div class="instituicao">
            <button id="botao_index"><a href="instituicao.php" id="botao_a"><h2>Instituição</h2></a></button>
        </div>
    </div>

</body>
</html>