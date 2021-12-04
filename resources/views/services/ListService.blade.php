@extends('layouts.app')

@section('title', "Busca do Serviço")

@section('content')
<div class="col-md-12 col-centered">
    <h1 style="text-align:center">Serviços</h1>
    <div class="row">
        @foreach($services as $service)
        <div class="col-sm-3">
            <div class="card text-white bg-dark">
                <div class="card-body">
                    <h5 class="card-title"><p><b>Tipo do serviço prestado:</b> </p>{{ $service->tipo_servico }}</h5>
                     <p class="card-date"><p><b>Tempo de serviço:</b></p> {{ date('d/m/Y', strtotime($service->tempo_inicial)) }} - {{ date('d/m/Y', strtotime($service->tempo_final)) }}</p>
                    <h5 class="card-title"><p><b>Descrição do serviço:</b> </p>{{ $service->descricao }}</h5>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="col text-center">
        <br><button onclick="location.href = '/home/'" id="Button" class="btn btn-success">Voltar</button>
    </div>
</div>

@if(count($services) == 0 && $search)
<p>Não foi possível encontrar nenhum serviço com {{ $search }}</p>
@elseif(count($services) == 0)
<p>Não há eventos disponíveis</p>
@endif

@endsection