<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact</title>
</head>
<body>
    <h1>Editar Local</h1>
    <form action="/contacts/update/{{$contact -> id}}" method="POST">
        @csrf
        <input type="text" name="name" value="{{$contact -> name}}" placeholder="Digite o nome...">
        <input type="text" name="email" value="{{$contact -> email}}" placeholder="Digite a email...">
        <input type="text" name="phone" value="{{$contact -> phone}}" placeholder="Digite o telefone...">
        <button type="submit">Enviar</button>
    </form>
    <a href="/contacts/delete/{{$id}}">Deletar</a>
</body>
</html>
