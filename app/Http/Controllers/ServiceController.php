<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageUploadController;
use App\Http\Requests\StoreServiceRequest;

Route::get('imagem-upload', [ ImageUploadController::class, 'imagemUpload' ])->name('imagem.upload');
Route::post('imagem-upload', [ ImageUploadController::class, 'imagemUploadPost' ])->name('imagem.upload.post');

class ServiceController extends Controller
{
    public function index() {
        $services = Service::all();
        return view('welcome', ['services' => $services]);

    }

    public function getService(Request $request) {
        $request->validate([
            'search' => 'required',
        ]);

        $search = request('search');

        $service = Service::query()->when($search, function($builder) use ($search) {
            $builder->where('tipo_servico', 'like', "%$search%")
            ->orWhere('descricao', 'like', "%$search%");
        })->get();

        return view('services.ListService',['services' => $service, 'search' => $search]);
    }

    public function getServices() {
        $services = Service::all();
        
       
        return view('services.ListAllService',['services' => $services]);
    }

    public function create() {
        return view('services.CreateService');
    }

    public function store(StoreServiceRequest $request) {
        $service = new Service;
        $user = auth()->user();
        $service->user_id = $request->route('user_id');

        $service->tipo_servico = $request->tipo_servico;
        $service->tempo_inicial = $request->tempo_inicial;
        $service->tempo_final = $request->tempo_final;
        $service->descricao = $request->descricao;

        //imagem

        if($request->hasFile('image') && $request->file('image')->isValid()){

            $requestImage = $request->image;

            $extension = $requestImage->extension();
            

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $requestImage->move(public_path('img/servicos'), $imageName);

            $service->image = $imageName;
        }

        $service->save();

        return redirect('/')->with('msg', 'Serviço criado com sucesso!');
    }



}
