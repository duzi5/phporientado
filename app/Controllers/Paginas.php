<?php


class Paginas extends Controller{ 

    public function index(){ 
        
        $dados = [
            'tituloPagina' => 'Página inicial',
            
        ];
        
        
        $this->view('paginas/home', $dados);

    }
    public function sobre(){ 
        $dados =[
            'tituloPagina' => 'Página de teste',
            
        ];

        $this->view('paginas/sobre', $dados);
    }



}