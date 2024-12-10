<html lang="pt-Br">

<head>
  <!-- Required meta tags -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link href="styles.css" rel="stylesheet">
  <title>Home</title>
</head>

<body>
  <div class="container pt-3">
    @include('header')

    <div class="row mt-4">
      <div class="col-md-12">
        <h1>Estabelecimentos</h1>
      </div>
    </div>

    <div class="row mt-3">
      @foreach($estabelecimentos as $estabelecimento)
      <div class="col-md-3">
        <div class="card" style="width: 18rem;">
          <div class="card-body">
            <h5 class="card-title"> {{ $estabelecimento->nome }} </h5>
            <p class="card-text"> {{ $estabelecimento->endereco }} </p>
            <a href="/produtos?cnpj={{$estabelecimento->cnpj}}" class="btn btn-primary">Ver cardápio</a>
          </div>
        </div>
      </div>
      @endforeach
    </div>

  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>