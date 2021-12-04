@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        
        <div id="search-container" class="col-md-12">
            <h1>Registre um Serviço</h1>
            <button onclick="location.href = '/service/new/'" id="myButton" class="btn btn-primary">Registrar</button>
        </div><br>
        <div id="search-container" class="col-md-12">
            <h1>Busque um Serviço</h1>
            <form action="/service/list" method="GET">
                <input type="text" id="search" name="search" class="form-control" placeholder="Procurar...">
                <button type="submit" class="btn btn-primary">Pesquisar</button>
            </form>
        </div>
        

    </div>
</div>
@endsection
