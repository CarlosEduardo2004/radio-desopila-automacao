<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Music;
use Illuminate\Support\Facades\Validator;

class MusicController extends Controller
{
    public function create(Request $request){
        $validatedData = Validator::make($request->all(), [
            'mus_nome' => 'bail|required|max:255',
            'mus_link' => 'bail|required|max:455',
            'mus_genero' => 'required|max:255',
        ])->validate();

        if (!$validatedData){
            return redirect('dashboard')->with('error', 'Dados inválidos, digite novamente.');
        }

        if ($validatedData){
            if(!Music::where('link', '=', $validatedData['mus_link'])->exists()){
                $music = new Music;
                $music->name = $request->input('mus_nome');
                $music->link = $request->input('mus_link');
                $music->genero = $request->input('mus_genero');
                $music->save();
                return redirect('dashboard')->with('success', 'Música adicionada com sucesso');
            }
        }
        return redirect('dashboard')->with('error', 'Essa música já existe');
    }
}
