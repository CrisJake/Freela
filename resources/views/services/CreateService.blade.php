@extends('layouts.main')

@section('title', 'Freela')

@section('content')

<div id="service-create-container" class="col-md-6 offset-md-4">
    <h1>Cadastro de serviços</h1>
    <form action="/service" method="POST">
        <div class="form-group">
            <label for="title">Serviço:</label>
            <input type="text" class="form" id="title" name="title" placeholder="Tipo de serviço">
        </div>
        <div class="form-group">
            <label for="title">Por quanto tempo prestou esse serviço?</label>
            <input type="text" class="form" id="tempo-servico" name="tempo-servico" placeholder="Tipo de serviço">
        </div>
        <div class="form-group">
            <label for="title">Descrição:</label>
            <textarea name="descricao" id="descricao" class="for-control" placeholder="Descrição do serviço"></textarea>
        </div>
        <input type="submit" class="btn btn-primary" value="Cadastrar">
    </form>
</div>

@endsection