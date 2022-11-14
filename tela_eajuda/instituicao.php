<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instituição</title>
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

        input[type="submit"]{
            margin-top: 10px;
        }

        h2{
            text-align: center;
        }

        .faixada{
            padding: 110px;
            background-size: 100% 100%;
            background-image: url(https://img.freepik.com/fotos-premium/duas-maos-fortes-estao-segurando-uma-a-outra-para-obter-ajuda-e-cooperacao_182527-5667.jpg);
            color: white;
            font-size: xx-large;
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

    <div class="faixada">
        <h1>INSTITUIÇÃO</h1>
    </div>

    <form>
        <h2>INSTITUIÇÃO</h2>
        <label for="nome_inst">Nome da instituição</label>
        <input type="text" name="nome_inst" id="nome_inst">

        <label for="cpnj">CNPJ</label>
        <input type="text" name="cpnj" id="cpnj">

        <label for="regiao">Região</label>
        <input type="text" name="regiao" id="regiao">

        <input type="submit" value="Enviar">
    </form>
</body>
</html>