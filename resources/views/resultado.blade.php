@extends('base')

@section('resposta')
    
    <div class="container">
        <label>{{ $resultado ?? '' }}</label>
    </div>
@endsection