<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Pagina inicial</h1>
    <?php
    $nome = $_POST ["nome"];
    echo "<br>";
    $senha = $_POST ["senha"];
    if($nome == "Joao" and $senha =="123")
     header("Location: "."site.php");
    else
    print ("Nome/Senha inválidos!");
    ?>
</body>
</html>