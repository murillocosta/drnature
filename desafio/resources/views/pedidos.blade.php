<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Doutor Nature</title>
    <link href="https://fonts.cdnfonts.com/css/helvetica-neue-55" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/styles.css">
</head>

<body>
    <div class="table_container m-auto">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">E-Mail</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Celular</th>
                    <th scope="col">CPF</th>
                    <th scope="col">CEP</th>
                    <th scope="col">Logradouro</th>
                    <th scope="col">Nº</th>
                    <th scope="col">Complemento</th>
                    <th scope="col">Bairro</th>
                    <th scope="col">Cidade</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Entrega</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pedidos as $pedido)
                    <tr>
                        <th scope="row">{{ $pedido->id }}</th>
                        <td>{{ $pedido->nome }}</td>
                        <td>{{ $pedido->email }}</td>
                        <td>{{ $pedido->celular }}</td>
                        <td>{{ $pedido->cpf }}</td>
                        <td>{{ $pedido->cep }}</td>
                        <td>{{ $pedido->logradouro }}</td>
                        <td>{{ $pedido->numero }}</td>
                        <td>{{ $pedido->complemento }}</td>
                        <td>{{ $pedido->bairro }}</td>
                        <td>{{ $pedido->cidade }}</td>
                        <td>{{ $pedido->estado }}</td>
                        <td>{{ $pedido->entrega }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
