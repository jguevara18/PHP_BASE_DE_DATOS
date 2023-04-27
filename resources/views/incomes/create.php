<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AGREGA UN NUEVO INGRESO</title>
</head>
<body>

    <h1>AGREGA UN NUEVO INGRESO</h1>

    <form action = "/incomes" method = "post">
    <label for="payment_method">METODO DE PAGO</label>
    <select name="payment_method" id="payment_method">
        <option value="1" selected>CUENTA BANCARIA</option>
        <option value="2">TARJETA DE CREDITO</option>
    </select>
    <label for="type">TIPO DE INGRESO</label>
    <select name="type" id="type">
        <option value="1" selected>PAGO DE NOMINA</option>
        <option value="2">REEMBOLSO</option>
    </select>

    <label for="amount">MONTO</label>
    <input type="text" name="amount" id="amount">

    <label for = "date">FECHA</label>
    <input type="date" name="date" id="date">

    <label for = "description">Descripcion</label>
    <textarea name="description" id="description"></textarea>

    <input type = "hidden" name = "method" value = "post">

    <button type = "submit">Guardar</button>




    </form>
    
</body>
</html>