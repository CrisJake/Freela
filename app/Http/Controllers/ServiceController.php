<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageUploadController;

Route::get('imagem-upload', [ ImageUploadController::class, 'imagemUpload' ])->name('imagem.upload');
Route::post('imagem-upload', [ ImageUploadController::class, 'imagemUploadPost' ])->name('imagem.upload.post');

class ServiceController extends Controller
{
    public function index() {
        $services = Service::all();
        return view('welcome', ['services' => $services]);

    }

    public function list(Request $request) {
        $search = request('search');

        if($search) {
            $service = Service::where([
                ['tipo_servico', 'like', '%'.$search.'%']
            ])->get();
        }  else {
            $service = Service::all();
        }

        return view('services.ListService',['services' => $service, 'search' => $search]);
    }

    public function create() {
        return view('services.CreateService');
    }

    public function store(Request $request) {

        $service = new Service;
        $user = auth()->user();
        $service->user_id = $request->route('user_id');

        $service->tipo_servico = $request->title;
        $service->tempo_inicial = $request->tempo_inicial;
        $service->tempo_final = $request->tempo_final;
        $service->descricao = $request->descricao;

        $service->save();

        return redirect('/')->with('msg', 'Serviço criado com sucesso!');
    }



}
