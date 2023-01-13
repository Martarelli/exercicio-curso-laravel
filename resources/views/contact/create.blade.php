<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contato</title>
</head>
<body>
    <h1>Criar Contato</h1>
    <form action="/contacts/store" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Digite o nome...">
        <input type="text" name="email" placeholder="Digite a email...">
        <input type="text" name="phone" placeholder="Digite o telefone...">
        <button type="submit">Enviar</button>
    </form>
</body>
</html>
