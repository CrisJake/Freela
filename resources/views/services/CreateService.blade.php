@extends('layouts.main')

@section('title', 'Freela')

@section('content')

<div id="service-create-container" class="col-md-6 offset-md-4">
    <h1>Cadastro de serviços</h1>
    <form action="/service" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Serviço:</label>
            <input type="text" class="form" id="title" name="title" placeholder="Jardinagem, pedreiro, motorista...">
        </div>
        <div class="form-group">
            <label for="title">Por quanto tempo prestou esse serviço?</label>
            <input type="date" class="form" id="tempo_servico" name="tempo_servico">
        </div>
        <div class="form-group">
            <label for="title">Descrição:</label>
            <textarea name="descricao" id="descricao" class="for-control" placeholder="Descrição do serviço"></textarea>
        </div>
        <input type="submit" class="btn btn-primary" value="Cadastrar">
    </form>
</div>

@endsection