@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
                <div class="row justify-content-center">
                    <button onclick="location.href = '/service/new/'" id="myButton" class="btn btn-primary">Registre um Serviço</button>
                </div>
            </div>
        </div>

        <div id="search-container" class="col-md-12">
            <h1>Busque um evento</h1>
            <form action="/service/list" method="GET">
                <input type="text" id="search" name="search" class="form-control" placeholder="Procurar...">
            </form>
        </div>

    </div>
</div>
@endsection
