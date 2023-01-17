<form action="/photo/store" method="POST" enctype="multipart/form-data">
    @csrf
    <h1>Criar Post</h1>
    <input type="file" name="photo">

    <button type="submit" >Enviar</button>
</form>
