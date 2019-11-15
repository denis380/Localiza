<html lang="pt-br"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Localiza Votação.</title>
    <style>
        @media screen and (max-width: 600px) {
        .sumir{
            display: none;
        }
        }

        @media screen and (min-width: 600px) {
            .aparecer{
                display: none;
            }
        }
    </style>
    <!-- Principal CSS do Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/base.css') }}">
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
                    <div class="p-2 sumir">
                        <h1 class="display-5" style="color:#712d7f">FIQUE ATENTO!!</h1>
                        <p>A psicóloga Denise Reis é nascida em Nova Contagem, filha da ex-conselheira tutelar Flavia Eveline, que é muito querida pelo trabalho que desenvolveu no conselho. Denise é a primeira mulher de uma casa de 5 filhos, é a primeira da sua família a concluir o ensino superior, formou-se com muita dificuldade trabalhando e estudando no período noturno, fez vários estágios aos finais de semana, sempre em regiões de alta vulnerabilidade social. Atuou no projeto Mais Educação como voluntária no atendimento de crianças e adolescentes, atualmente atende em uma clínica no Eldorado. A família residiu na Vila Renascer, sempre solidária a causa da proteção das crianças e dos adolescentes, sua casa era sempre procurada como referência de apoio e encaminhamentos para as redes.
                                Esses valores de valorização do ser humano e da família, são os pilares da formação humana da nossa candidata ao conselho tutelar. Ser conselheira para Denise Reis é uma missão e retribuição para sociedade, com a consciência da importância dessa função, para que nossas crianças e adolescentes tenham um futuro digno. Votando 001, você estará escolhendo uma mulher preparada, íntegra, comprometida e experiente no atendimento de crianças, adolescentes e suas famílias.
                                Conto com seu apoio !</p>
                        <p style='padding-top:1%'>
                            <hr>
                            Você pode digitar o nome da escola onde vota para eleições ordinárias e descobrir onde será seu local de voração para o concelho tutelar...
                        </p>
                        <img src="{{ asset('img/arrow-down.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            
            <form action="/buscaLocal" method="POST" id="formBusca" name="formBusca">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col">
                    <label for="edtNomeEscola">Escola onde vota:</label>
                    <input type="text" class="form-control" id="edtNomeEscola" name="edtNomeEscola" placeholder="Ex: Adriano José Costa">
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
    <div class="aparecer text-center">
        <p><a class="btn btn-primary btn-lg" href="/info" role="button">SAIBA MAIS »</a></p>
    </div>
    <footer class="container">
        <span class="badge badge-ligth">© Desenvolvido por Denis dos Reis / denis380@gmail.com</span>
    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  

</body></html>