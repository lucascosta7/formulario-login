<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SITE | LG</title>

    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background: linear-gradient(to right,	#000000, #808080);
            background: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
            text-align: center;
            color: white
        }
        .box{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background-color: rgba(0, 0, 0, 0.4);
            background-color: rgba(0, 0, 0, 0.6);
            padding: 30px;
            border-radius: 15px;
        }
        a{
            text-decoration: none;
            color: white;
            border: 3px solid white;
            border: 3px solid dodgerblue;
            border-radius: 10px;
            padding: 10px;
        }
        a:hover{
            background-color: black;
        }
        h1{
            text-align: center;
        }
        .login{
            margin-right: 5px;
            background-color: dodgerblue;
        }
    </style>
</head>
<body>
    <div class="box">
        <h1>Escolha</h1>
        <br>
        <a href="login.php" class="login">Login</a>
        <a href="login.php">Login</a>
        <a href="formulario.php">Cadastra-se</a>
    </div>
</body>
</html>