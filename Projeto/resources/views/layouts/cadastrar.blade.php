<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>
</head>
<body>
    <form action="{{route ('produto.store')}}" method="POST">
        @csrf

        <label>Nome do Produto</label>
        <input type='text' name='nome' id='nome'>

        <label>Tipo do Produto</label>
        <input type='text' name='tipo' id='tipo'>

        <label>Tamanho do Produto</label>
        <input type='text' name='tamanho' id='tamanho'>

        <label>Preço do Produto</label>
        <input type='text' name='preco' id='preco'>

        <button type="submit">Cadastrar</button>
</body>
</html>