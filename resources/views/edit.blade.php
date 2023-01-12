<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Editar Local</h1>
    <form action="/places/update/{{$id}}" method="POST">
        @csrf
        <input type="text" name="name" value="{{$place -> name}}" placeholder="Digite o nome...">
        <input type="text" name="description" value="{{$place -> description}}" placeholder="Digite a descrição...">
        <input type="text" name="address" value="{{$place -> address}}" placeholder="Digite o endereço...">
        <button type="submit">Enviar</button>
    </form>
    <a href="/places/delete/{{$id}}">Deletar</a>
</body>
</html>
