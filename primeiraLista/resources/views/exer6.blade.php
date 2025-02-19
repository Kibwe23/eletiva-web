@extends('layout')

@section('conteudo')

    <form method="post" action="/exer6Resp">

        @csrf

        <div class="mb-3">
            <label for="valor1" class="form-label">Insira a Altura</label>
            <input type="number" id="valor1" name="valor1" class="form-control">
        </div>

        <div class="mb-3">
            <label for="valor2" class="form-label">Insira a Largura</label>
            <input type="number" id="valor2" name="valor2" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>

    @isset($perimetroRetangulo)
        <h1>O valor do perimetro do retangulo é: {{ $perimetroRetangulo }} m²</h1>
    @endisset

@endsection