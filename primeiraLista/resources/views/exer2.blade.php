@extends('layout')

@section('conteudo')

    <form method="post" action="/exer2Resp">

        @csrf

        <div class="mb-3">
            <label for="valor1" class="form-label">Insira a temperatura em Celcius</label>
            <input type="number" id="valor1" name="valor1" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>

    @isset($valorConvertido)
        <h1>O valor em fahrenheit é: {{ $valorConvertido }} ºF</h1>
    @endisset

@endsection