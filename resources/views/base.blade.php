<html lang="pt-br"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Localiza Votação.</title>

    <!-- Principal CSS do Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Estilos customizados para esse template -->
    <link href="jumbotron.css" rel="stylesheet">
  </head>

  <body>

    <main role="main">

      <!-- Principal jumbotron, para a principal mensagem de marketing ou call to action -->
        <div class="jumbotron">
            <div class="container-fluid">
                <div class="d-flex d-row">
                    <div class="p-2">
                        <img src="{{ asset('img/foto-denise01.jpg') }}" alt="foto">
                    </div>
                    <div class="p-2">
                        <h1 class="display-5" style="color:#712d7f">FIQUE ATENTO!!</h1>
                        <p>Os locais de votação foram alterados e vamos esperar a dona Denise bolar um texto grandão 
                           para preencher esse espaço que por enquanto contém somente esse texto "enrolativo" para testar o layout.</p>
                        <p><a class="btn btn-primary btn-lg" href="#" role="button">VER TABELA COMPLETA »</a></p>

                        <p style='padding-top:1%'>
                            Texto falando que a pessoa pode digitar o nome da escola ali em baixo e será feliz para sempre ....
                        </p>
                        <img src="{{ asset('img/arrow-down.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
                <!-- inputs -->
            <form action="/buscaLocal" method="POST" id="formBusca" name="formBusca">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col">
                    <label for="edtNomeEscola">Escola onde vota:</label>
                    <input type="text" class="form-control" id="edtNomeEscola" name="edtNomeEscola" placeholder="Ex: E E Adriano José Costa">
                    </div>
                    <div class="col">
                    <label for="edtZona">Zona eleitoral</label>
                    <input type="number" class="form-control" placeholder="Ex: 90" id="edtZona" name="edtZona">
                    </div>
                </div>
                <div class="" style="margin-top:3%; margin-left:45%;">
                    <button class="btn btn-success" type="submit"><i class="fas fa-search"></i> Buscar</button>
                </div>
            </form>

            <hr>

        </div>
        @if(session()->has('message'))
            <div class="container alert alert-danger">
                {{ session()->get('message') }}
            </div>
        @endif    

        @yield('resposta')

    </main>

    <footer class="container">
      <p>© Desenvolvido por Denis dos Reis 2019</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  

</body></html>