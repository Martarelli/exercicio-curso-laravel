<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contato</title>
</head>
<body>
    <h1>Meus Contatos</h1>
    <ul>
        @foreach ($contacts as $item)
            <li>{{$item -> name}}</li>
        @endforeach
    </ul>

    <a href="/contacts/create">Criar Contato</a>
</body>
</html>
