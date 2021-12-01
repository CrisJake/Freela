@extends('layouts.main')

@section('title', 'Criar Serviço')

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
  <h1>Insira o serviço a ser prestado</h1>
  <form action="/service/{{ Auth::user()->id }}" method="POST">
    @csrf
    <div class="form-group">
      <label for="imagem">Imagem do Serviço:</label>
      <input type="file" id="imagem" name="imagem" class="from-control-file">
    </div>
    <div class="form-group">
      <label for="title">Serviço:</label>
      <input type="text" class="form-control" id="title" name="title" placeholder="Jardinagem, pedreiro, motorista...">
    </div>
    <div class="form-group">
      <label for="title">Por quanto tempo prestou esse serviço?:</label>
      <input class="form-control" type="date" class="form" id="tempo_inicial" name="tempo_inicial">
      <input class="form-control" type="date" class="form" id="tempo_final" name="tempo_final">
    </div>
    <div class="form-group">
      <label for="title">Descrição:</label>
      <textarea name="descricao" id="descricao" class="form-control" placeholder="descrição"></textarea>
    </div>
    <input type="submit" class="btn btn-primary" value="Criar Serviço">
  </form>
</div>

@endsection
