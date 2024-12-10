<html lang="pt-Br">

<head>
    <!-- Required meta tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="styles.css" rel="stylesheet">
    <title>Hello, world!</title>
</head>

<body>
    <div class="container pt-3">
        @include('header')

        <div class="row mt-4">
            <div class="col-md-12">
                <h1>Cardápio</h1>
                @if($estabelecimento)
                <h2>{{ $estabelecimento->nome }}</h2>
                @else
                <p>Estabelecimento não encontrado.</p>
                @endif
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-6">
                <ul class="list-group">
                    @foreach($produtos as $produto)
                    <li class="list-group-item">
                        {{ $produto->nome }} - R$ {{ number_format($produto->preco, 2, ',', '.') }}
                    </li>
                    @endforeach

                </ul>
            </div>
        </div>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>