@extends('layout')

@section('conteudo')

    <form method="post" action="/exer5Resp">

        @csrf

        <div class="mb-3">
            <label for="valor1" class="form-label">Insira o Raio do circulo</label>
            <input type="number" id="valor1" name="valor1" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>

    @isset($areaCirculo)
        <h1>O valor da área do circulo é: {{ $areaCirculo }}</h1>
    @endisset

@endsection