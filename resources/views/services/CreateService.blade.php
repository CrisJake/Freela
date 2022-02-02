@extends('layouts.app')

@section('title', 'Cadastro de Serviço')

@section('content')

<div id="service-create-container" class="col-md-12 col-centered">
    <h1 style="text-align:center">Cadastro de serviços</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/service/{{ Auth::user()->id }}" method="POST" enctype="multipart/form-data">
        @csrf
         <div class="form-group">
              <label for="imagem">Imagem do Serviço:</label>
              <input type="file" id="image" name="image" class="from-control-file">
        </div>
        <div class="form-group">
            <label for="title">Título do serviço:</label>
            <input type="text" class="form-control" id="tipo_servico" name="tipo_servico" placeholder="Jardinagem, pedreiro, motorista...">
        </div>
        <div class="form-group">
            <label for="title">Por quanto tempo prestou esse serviço?</label>
            <input class="form-control" type="date" class="form" id="tempo_inicial" name="tempo_inicial" style="margin-bottom:10px">
            <input class="form-control" type="date" class="form" id="tempo_final" name="tempo_final">
        </div>
        <div class="form-group">
            <label for="title">Descrição:</label>
            <textarea name="descricao" id="descricao" class="form-control" placeholder="descrição"></textarea>
        </div>
        <input type="submit" class="btn btn-primary" value="Criar Serviço">
        <input name="enviar" id="cancela_acao" class="btn btn-sucess" type="button" value=" Voltar " onClick="history.go(-1)" style="margin-right:20px">
  </form>
</div>

@endsection
