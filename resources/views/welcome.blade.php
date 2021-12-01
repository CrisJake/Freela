@extends('layouts.main')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-1">
            <h1>Freela</h1>
        </div>
        <div class="row justify-content-center">
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iusto alias laudantium voluptate facere rem quo non consectetur sint! Exercitationem repellendus esse odio illo debitis, accusamus voluptatibus quia delectus repudiandae beatae.</p>
        </div>
        <div id="search-container" class="col-md-12">
            <h1>Busque um serviço</h1>
            <form action="">
                <input type="text" id="search" name="search" class="form-control" placeholder="Procurar...">
            </form>
        </div>
        </div>
    </div>
</div>

@endsection
