<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculadora</title>
</head>
<body>
    <form action="/calcular" method="POST">
        @csrf
        <input type="number" name="num1" placeholder="número 1">
        <input type="text" name="operador" placeholder="operação">
        <input type="number" name="num2" placeholder="número 2">
        <button type="submit">Calcular</button>
    </form>
</body>
</html>
