<html lang="pt-Br">

<head>
    <!-- Required meta tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="styles.css" rel="stylesheet">
    <title>Pedidos</title>
</head>

<body>
    <div class="container pt-3">
        @include('header')

        <div class="row mt-4">
            <div class="col-md-12">
                <h1>Pedidos</h1>
            </div>
        </div>

        <div class="row mt-3">
            <div class="row col-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Número</th>
                            <th>Data</th>
                            <th>CPF Cliente</th>
                            <th>Código Cupom</th>
                            <th>CPF Entregador</th>
                            <th>Horário de Entrega</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($pedidos as $pedido)
                        <tr scope="row">
                            <td>{{ $pedido->numero }}</td>
                            <td>{{ $pedido->data }}</td>
                            <td>{{ $pedido->cpfCliente }}</td>
                            <td>{{ $pedido->codCupom }}</td>
                            <td>{{ $pedido->cpfEntregador }}</td>
                            <td>{{ $pedido->horarioEntrega }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>