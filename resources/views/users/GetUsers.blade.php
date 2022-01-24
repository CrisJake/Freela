@extends('layouts.app')

@section('title', "Busca por usuario")

@section('content')
<div class="col-md-12 col-centered">
    <h1 style="text-align:center">Exibindo as informações de: </h1>
    <div>
        <?php echo $user; ?>
    </div>
</div>

@endsection