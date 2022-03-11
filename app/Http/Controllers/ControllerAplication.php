<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Models\Models\ModelCategoria;
use App\Models\Models\ModelMarca;
use App\Models\Models\ModelProduto;




class ControllerAplication 
{
    public function registro() {
        $produto = [
            'Uni GPS',
            'PCC'
            // EXEMPLO
        ];
        return view ( 'controle.registro',[
            'produto' => $produto
        ]);

    }
    // SE O BANCO DE DADOS TIVESSE FUNCIONADO
    //public function registro() {
        //    $produto = $this->objProduto->all();
        // return view ( 'controle.registro',[
            //     'produto' => $produto
            // ]);

            // }


    public function new(){
        return view ('controle.new');

    }

    public function cadastroSucess(){
        return view ('controle.cadastroSucess');

    }

    public function sucessMarca(){
        return view ('controle.sucessMarca');

    }

    public function sucessCategoria(){
        return view ('controle.sucesscategoria');

    }

    public function sucessCadastroUsuario(){
        return view ('controle.sucessCadastroUsuario');

    }

    public function bemvindo(){
        return view ('controle.bemvindo');

    }

    public function cadastro(){
        return view ('controle.cadastro');

    }

    public function login(){
        return view ('controle.login');

    }

    public function categoria(){
        $categoria = [
            'rastreador',
            'monitorador'
            // EXEMPLO
        ];
        return view ( 'controle.categoria',[
            'categoria' => $categoria
        ]);

    
    } 

       public function marca(){
        $marca = [
            'lenovo',
            'Samsung'
            // EXEMPLO
        ];
        return view ( 'controle.marca',[
            'marca' => $marca
        ]);



    }

}