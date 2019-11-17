<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/base.css') }}">

    <title>Cadastrados</title>
</head>
<body>
    <div class="container">
        Escolas de votação comum
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                <th scope="col">Nome Escola</th>
                <th scope="col">IdLocal</th>
                <th scope="col">Zona</th>
                <th scope="col">Excluir</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($escolas as $escolas)
                <tr>
                <th scope="row">{{ $escolas->id}}</th>
                    <td>{{ $escolas->nome}}</td>
                    <td>{{ $escolas->idLocal}}</td>
                    <td>{{ $escolas->zona}}</td>
                    <td>
                        <a class="btn btn-danger" style="color:cornsilk" href="/deletaEscola/{{ $escolas->id}}">Deletar</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
              <hr>

        Locais de votação para o conselho 
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                <th scope="col">Nome Escola</th>
                <th scope="col">Zona</th>
                <th scope="col">Excluir</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($locais as $locais)
                <tr>
                <th scope="row">{{ $locais->id}}</th>
                    <td>{{ $locais->nome}}</td>
                    <td>{{ $locais->zona}}</td>
                    <td>
                        <a class="btn btn-danger" style="color:cornsilk" href="/deletaLocal/{{ $locais->id}}">Deletar</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>