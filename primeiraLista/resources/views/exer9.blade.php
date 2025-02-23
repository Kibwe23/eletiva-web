@extends('layout')

@section('conteudo')

    <form method="post" action="/exer9Resp">

        @csrf

        <div class="mb-3">
            <label for="valor1" class="form-label">Insira o Valor em metros</label>
            <input type="" id="valor1" name="valor1" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>

    @isset($centimetros)
        <h1>O valor em centimetros é: {{ $centimetros }} cm</h1>
    @endisset

@endsection