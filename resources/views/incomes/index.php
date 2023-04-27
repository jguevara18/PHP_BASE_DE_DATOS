<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LISTA DE INGRESOS</title>
</head>
<body>

    <h1>LISTA DE INGRESOS</h1>
    <ul>
    <?php foreach($results as $result):  ?>
        <li> GASTASTE <?= $result["amount"] ?> USD EN : <?= $result["description"] ?></li>
        <?php endforeach; ?>



    </ul>

        
    
</body>
</html>