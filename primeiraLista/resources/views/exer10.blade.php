@extends('layout')

@section('conteudo')

    <form method="post" action="/exer10Resp">

        @csrf

        <div class="mb-3">
            <label for="valor1" class="form-label">Insira o Valor em quilometros</label>
            <input type="" id="valor1" name="valor1" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>

    @isset($milhas)
        <h1>O valor em milhas é: {{ $milhas }} m/h</h1>
    @endisset

@endsection