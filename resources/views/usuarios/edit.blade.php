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
                <h1>Editar usuário</h1>
            </div>
            @if($errors->any())
            <div class="col-md-12">
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
            @endif
        </div>

        <div class="row mt-3">
            <div class="row col-12">
                <form method="POST" action="{{ route('usuarios.update', $usuario->cpf) }}">
                    @csrf
                    @method('PUT')
                    <input type="hidden" id="cpf" name="cpf" value="{{$usuario->cpf}}">
                    <div class="form-group my-3">
                        <label for="nome">Nome</label>
                        <input required type="text" class="form-control" name="nome" id="nome" aria-describedby="nome" placeholder="Digite seu nome" value="{{ $usuario->nome }}">
                    </div>

                    <div class="form-group my-3">
                        <label for="nome">Email</label>
                        <input required type="email" class="form-control" id="email" name="email" aria-describedby="email" placeholder="Digite seu email" value="{{ $usuario->email }}">
                    </div>

                    <div class="form-group my-3">
                        <label for="nome">Endereço</label>
                        <input required type="text" class="form-control" id="endereco" name="endereco" aria-describedby="endereco" placeholder="Digite seu endereço" value="{{ $usuario->endereco }}">
                    </div>

                    <div class="form-group my-3">
                        <label for="nome">Data de nascimento</label>
                        <input required type="date" class="form-control" id="dataNascimento" name="dataNascimento" aria-describedby="dataNascimento" value="{{ $usuario->dataNascimento }}">
                    </div>

                    <div class="mb-3">
                        <label for="tipoUsuario" class="form-label">Tipo de Usuário</label>
                        <select class="form-control" id="tipoUsuario" name="tipoUsuario" required>
                            <option value="Entregador" {{ $usuario->tipoUsuario == 'Entregador' ? 'selected' : '' }}>Entregador</option>
                            <option value="Lojista" {{ $usuario->tipoUsuario == 'Lojista' ? 'selected' : '' }}>Lojista</option>
                            <option value="Cliente" {{ $usuario->tipoUsuario == 'Cliente' ? 'selected' : '' }}>Cliente</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-success">Salvar</button>

                </form>
            </div>
        </div>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>