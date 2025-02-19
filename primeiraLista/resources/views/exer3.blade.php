@extends('layout')

@section('conteudo')

    <form method="post" action="/exer3Resp">

        @csrf

        <div class="mb-3">
            <label for="valor1" class="form-label">Insira a temperatura em Fahrenheit</label>
            <input type="number" id="valor1" name="valor1" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>

    @isset($valorConvertido)
        <h1>O valor em Celcius é: {{ $valorConvertido }} ºC</h1>
    @endisset

@endsection