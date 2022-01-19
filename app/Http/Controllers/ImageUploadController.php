<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageUploadController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function imagemUpload()
    {
        return view('imagemUpload');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function imagemUploadPost(Request $request)
    {
        $request->validate([
            'imagem' => 'required|imagem|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imagemName = time().'.'.$request->imagem->extension();

        $request->imagem->move(public_path('img'), $imagemName);

        /* Store $imageName name in DATABASE from HERE */

        return back()
            ->with('success','You have successfully upload image.')
            ->with('image',$imagemName);
    }
}
