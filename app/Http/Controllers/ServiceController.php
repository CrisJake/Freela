<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    public function index() {
                
    }

    public function create() {
        return view('services.CreateService');
    }

    public function store(Request $request) {

        $service = new Service;

        $user_id = $request->route('user_id');

        $service->tipo_servico = $request->title;
        $service->tempo_servico = $request->tempo_servico;
        $service->descricao = $request->descricao;
        
        $service->save();

        return redirect('/home');

    }
}
