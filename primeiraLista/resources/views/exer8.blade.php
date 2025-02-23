@extends('layout')

@section('conteudo')

    <form method="post" action="/exer8Resp">

        @csrf

        <div class="mb-3">
            <label for="valor1" class="form-label">Insira a Base</label>
            <input type="number" id="valor1" name="valor1" class="form-control">
        </div>

        <div class="mb-3">
            <label for="valor2" class="form-label">Insira O Expoente</label>
            <input type="number" id="valor2" name="valor2" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>

    @isset($resultado)
        <h1>O Resultado é: {{ $resultado }} </h1>
    @endisset

@endsection