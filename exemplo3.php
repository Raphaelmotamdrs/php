<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=1, initial-scale=1.0">
    <title>Formulários</title>
    <style>

        form{
            background-color:grey;
            left:10px;
            width:600px; height:100px;
            font-color:white;
        }
        
        input, label{
            position:relative;
            left:10px;
            color="white";
            font-family="Courier"
        }


    </style>
</head>
<body class="body">
    <h1> PHP</h1>
    <h2> Exemplo 3</h2>
    <form action="index.php" method="POST">
        <div>
        <label for="nome">Nome:</label><br>
        <input id="nome" type="text" name="nome"> <br>
        <label for="senha">Senha:</label><br>
        <input id="senha" type="password" name="senha">
        <div>
        <br>
        <input type="submit">
</form> 
</body>
</html>