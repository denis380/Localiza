@extends('base')

@section('resposta')
    <p>Escola onde voratá</p>
    <form action="/insereLocal" method="POST">
        {{ csrf_field() }}
        <input type="text" id="edtNome" name="edtNome" placeholder="Nome">
        <input type="number" id="edtZona" name="edtZona" placeholder="Zona">
        <button type="submit">Cadastrar</button>
    </form>

    <p>Escola onde vota para eleições normais</p>
    <form action="/insereEscola" method="POST">
        {{ csrf_field() }}
        <input type="text" id="edtNome" name="edtNome" placeholder="Nome">
        <input type="number" id="edtIdLocal" name="edtIdLocal" placeholder="ID do local onde voratá">
        <input type="number" id="edtZona" name="edtZona" placeholder="Zona">
        <button type="submit">Cadastrar</button>
    </form>

    @if(session()->has('st'))
    <div class="container alert alert-success">
        {{ session()->get('st') }}
    </div>
@endif 
@endsection
