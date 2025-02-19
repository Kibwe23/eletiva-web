@extends('layout')

@section('conteudo')

    <form method="post" action="/exer7Resp">

        @csrf

        <div class="mb-3">
            <label for="valor1" class="form-label">Insira o Raio do circulo</label>
            <input type="number" id="valor1" name="valor1" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>

    @isset($perimetroCirculo)
        <h1>O valor do perimetro do circulo é: {{ $perimetroCirculo }}</h1>
    @endisset

@endsection