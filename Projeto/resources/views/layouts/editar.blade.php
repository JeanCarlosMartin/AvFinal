<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="{{route('alterar_produto', ['id'=>$produto->id])}}" method="POST">
        @csrf

        <label>Nome do Produto</label>
        <input type='text' name='nome' id='nome' value="{{$produto->nome}}">

        <label>Tipo do Produto</label>
        <input type='text' name='tipo' id='tipo' value="{{$produto->tipo}}">

        <label>Tamanho do Produto</label>
        <input type='text' name='tamanho' id='tamanho' value="{{$produto->tamanho}}">

        <label>Preço do Produto</label>
        <input type='text' name='preco' id='preco' value="{{$produto->preco}}">

        <button type="submit">Editar</button>

</body>
</html>