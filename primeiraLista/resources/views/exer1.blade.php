@extends('layout')

@section('conteudo')

    <form method="post" action="/exer1Resp">

        @csrf

        <div class="mb-3">
            <label for="valor1" class="form-label">Informe a Primeira Nota</label>
            <input type="number" id="valor1" name="valor1" class="form-control">
        </div>

        <div class="mb-3">
            <label for="valor2" class="form-label">Informe a Segunda Nota</label>
            <input type="number" id="valor2" name="valor2" class="form-control" required="">
        </div>

        <div class="mb-3">
            <label for="valor3" class="form-label">Informe a Terceira Nota</label>
            <input type="number" id="valor3" name="valor3" class="form-control" required="">
        </div>

        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>

    @isset($media)
        <h1>O valor da média das notas é: {{ $media }}</h1>
    @endisset

@endsection