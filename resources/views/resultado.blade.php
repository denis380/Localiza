@extends('base')

@section('resposta')
    
    <div class='container'>

        @if (count($resultado ?? []) > 0)
        
        <div class="text-center">
            <div class="list-group" id="list-tab" role="tablist">
                @foreach ($resultado ?? '' as $escola)
                    <a class="list-group-item list-group-item-action" href="/localCorrespondente/{{ $escola->idLocal }}" role="tab" aria-controls="home" 
                        style="color:darkblue">{{ $escola->nome }}</a>
                @endforeach
            </div>
        </div>
        @elseif(!empty($resultado)) 
            <label>Nenhuma encontrada</label>
        @endif


        @if (isset($local))
        <div class="container text-center">
            <p>Seu local de votação:</p>
            <h2 style="background-color:chartreuse">{{ $local['nome'] }}</h2>
        </div>
        @endif


    </div>
    <div style="padding-top:5%">
        <hr>
    </div>
@endsection