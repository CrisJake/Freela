<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    public function index() {

        $services = Service::all();
        return view('welcome', ['services' => $services]);
    }

    public function create() {
        return view('services.create');
    }

    public function store(Request $request) {

        $service = new Service;

        $service->user_id = $request->route('user_id');

        $service->tipo_servico = $request->title;
        $service->tempo_inicial = $request->tempo_inicial;
        $service->tempo_final = $request->tempo_final;
        $service->descricao = $request->descricao;

        // Image Upload
        if($request->hasFile('imagem') && $request->file('imagem')->isValid()) {

            $requestimagem = $request->imagem;

            $extension = $requestimagem->extension();

            $imagemName = md5($requestimagem->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $requestimagem->move(public_path('img/servico'), $imagemName);

            $service->imagem = $imagemName;

        }

        $service->save();

        return redirect('/')->with('msg', 'Serviço criado com sucesso!');


    }
}
