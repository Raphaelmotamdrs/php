<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 1</title>
</head>
<body>
    <h1>Primeiro exemplo de php</h1>
    <h2>a linguagem de codigo ainda é html</h2>

    <?php 
    $texto = "texto do botao";
    echo "<p style='color:red;'>Aqui ja é php</p>";
    echo "<button> " . $texto . " </button>";
    ?>
</body>
</html>