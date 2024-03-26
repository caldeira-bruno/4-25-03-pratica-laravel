<?php

namespace App\Http\Controllers;

use App\Models\Pessoal;
use Illuminate\Http\Request;

class PessoalController extends Controller
{
    public function showAll() {
        $lista = Pessoal::all();
        return view('pessoas.list', ['lista' => $lista]);
    }

    public function compose() {
        return view('pessoas.compose');
    }

    public function store(Request $request) {
        Pessoal::create([
            'nome' => $request->nome,
            'email' => $request->email,
            'endereco' => $request->endereco,
        ]);
        //return $this->showAll();
        return redirect('/pessoas');
    }
    public function edit(Request $request) {
        $pessoal = Pessoal::find($request->id);
        return view('pessoas.compose', ['pessoa' => $pessoal]);
    }

    public function update(Request $request) {
        $pessoal = Pessoal::find($request->id);
        $pessoal->nome = $request->nome;
        $pessoal->email = $request->email;
        $pessoal->endereco = $request->endereco;

        $pessoal->save();
        //return $this->showAll();
        return redirect('/pessoas');
    }

    public function delete(Request $request) {
        $pessoal = Pessoal::find($request->id);
        $pessoal->delete();

        //return $this->showAll();
        return redirect('/pessoas');
    }
}