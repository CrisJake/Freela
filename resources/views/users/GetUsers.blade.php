@extends('layouts.app')

@section('title', "Busca por usuario")

@section('content')
<div class="col-md-12 col-centered">
    <h1 style="text-align:center">Exibindo as informações de: </h1>


    <div class="col-sm-3" style="margin-bottom:10px">
        <div class="card text-white bg-dark">
            <div class="card-body">
                <h5 class="card-title" style= "margin-top: 10px"><p><b>Nome:</b> </p>{{ $user->name }}</h5>
                    <p class="card-date"><p><b>Email:</b> </p>{{ $user->email }}</p>
            </div>
        </div>

    </div>
</div>

@endsection