@extends('layouts.main')

@section('title', 'Freela')

@section('content')

<div id="service-create-container" class="col-md-6 offset-md-4">
    <h1>Cadastro de serviços</h1>
    <!-- <form action="/service" method="POST"> -->
    <form action="/service/{{ Auth::user()->id }}" method="POST">
        @csrf
        <div class="container">
            <div class="jumbotron" style="background-color: #C0C0C0">
            

                    <!-- <a href="/service/{{ Auth::user()->id }}"></a> -->
                    <!-- <input type="hidden" name="user_id" value="{{ Auth::user()->id }}"> -->
                
                    <div class ="col-md-6 col-centered">
                        <label for="title">Serviço:</label>
                        <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" id="title" name="title" placeholder="Jardinagem, pedreiro, motorista...">
                    </div>
                    <div class ="col-md-6 col-centered">
                        <label for="title">Por quanto tempo prestou esse serviço?</label>
                        <input class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" type="date" class="form" id="tempo_servico" name="tempo_servico">
                    </div>
                    <div class ="col-md-6 col-centered">
                        <label for="title">Descrição:</label>
                        <textarea name="descricao" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" id="descricao" class="for-control" placeholder="Descrição do serviço"></textarea>
                    </div>
                    <div class ="col-md-6 col-centered">
                        <input type="submit" class="btn btn-primary" value="Cadastrar">
                    </div>
                
            </div>
        </div>
    </form>
</div>

@endsection