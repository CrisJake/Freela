@extends('layouts.app')

@section('title', "Busca do Serviço")

@section('content')

@foreach($services as $service)
<div class="card col-md-3">

    <div class="card-body">
        <h5 class="card-title"><p>Tipo do serviço prestado: </p>{{ $service->tipo_servico }}</h5>
        <p class="card-date"><p>Tempo de serviço:</p> {{ date('d/m/Y', strtotime($service->tempo_inicial)) }} - {{ date('d/m/Y', strtotime($service->tempo_final)) }}</p>
        <h5 class="card-title"><p>Descrição do serviço: </p>{{ $service->descricao }}</h5>
    </div>
</div>
@endforeach

@if(count($services) == 0 && $search)
<p>Não foi possível encontrar nenhum serviço com {{ $search }}</p>
@elseif(count($services) == 0)
<p>Não há eventos disponíveis</p>
@endif

@endsection