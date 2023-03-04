<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModelCarro;  

class CarroController extends Controller
{
    private $objCarro;

    public function __construct()
    {
        $this->objCarro=new ModelCarro();
    }

    public function index()
    {
        $carros = $this->objCarro->all();
        return view('/index', compact('carros'));
    }

   
    public function create()
    {  
        return view('/cadastrar');
    }

   
    public function store(Request $request)
    {
        $parameters = $request->all();
         $carro = $this->objCarro->create([
             'marca'=>$parameters ['marca'],
             'carro'=>$parameters ['carro'],
             'cor'=>$parameters ['cor'],
         ]);
        if ($carro) {
             return redirect('carro');
         } 
    }

    
    public function show($id)
    {   
        // pegar id, consultar no banco usando id
        // definir uma variavel com resultado, passar essa variavel pra view
        $carro = $this->objCarro->find($id);
        return view('/visualizar', compact('carro'));
    }

    
    public function edit(string $id)
    {
        $carro = $this->objCarro->find($id);
        return view('/editar', compact('carro'));
    }

    
    public function update(Request $request, string $id)
    {
        $parameters = $request->all();
        $carro = $this->objCarro->find($id);
        $carro -> update([
            'marca'=>$parameters ['marca'],
             'carro'=>$parameters ['carro'],
             'cor'=>$parameters ['cor'],
        ]);
        if ($carro) {
            return redirect('carro');
        } 
    }

    public function delete(string $id)
    {
        $carro = $this->objCarro->find($id);
        return view('/deletar', compact('carro'));
    }
    
    public function destroy(string $id)
    {
        $carro = $this->objCarro->find($id);
        $carro->delete();
        return $this->index();
    }
}
