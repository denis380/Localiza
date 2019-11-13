@extends('base')

@section('resposta')

    <form action="/insereLocal" method="POST">
        {{ csrf_field() }}
        <input type="text" id="edtNome" name="edtNome" placeholder="Nome">
        <input type="number" id="edtZona" name="edtZona" placeholder="Zona">
        <button type="submit">Cadastrar</button>
    </form>
    <form action="/insereEscola" method="POST">
        {{ csrf_field() }}
        <input type="text" id="edtNome" name="edtNome" placeholder="Nome">
        <input type="number" id="edtIdLocal" name="edtIdLocal" placeholder="ID do local onde voratá">
        <input type="number" id="edtZona" name="edtZona" placeholder="Zona">
        <button type="submit">Cadastrar</button>
    </form>

@endsection
