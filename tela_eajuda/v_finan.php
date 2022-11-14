<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voluntário Financeiro</title>
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
        <h1>VOLUNTÁRIO FINANCEIRO</h1>
    </div>

    <form>
        <h2>VOLUNTÁRIO FINANCEIRO</h2>
        <label for="regiao">Região</label>
        <input type="text" name="usuario" id="usuario">

        <label for="fp">Forma de pagamento</label>
        <select id="fp">
            <option value="saude">Á vista</option>
            <option value="ambiental">Crédito</option>
        </select>

        <label for="parc">Parcelamento</label>
        <select id="fp">
            <option value="uma">1x</option>
            <option value="duas">2x</option>
            <option value="tres">3x</option>
            <option value="quatro">4x</option>
            <option value="cinco">5x</option>
            <option value="seis">6x</option>
            <option value="sete">7x</option>
            <option value="oito">8x</option>
            <option value="nove">9x</option>
            <option value="dez">10x</option>
            <option value="onze">11x</option>
            <option value="doze">12x</option>
        </select>


        <input type="submit" value="Enviar">
        </form>
</body>
</html>