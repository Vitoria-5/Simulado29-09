<?php

namespace App\Livewire\Produto;

use Livewire\Component;

class ProdutoCreate extends Component
{
    public $nome;
    public $quantidade;
    public $validade;
    public $lote;
    public $peso;
    public $valor;

    public function store() {
    $produto = ProdutoCreate::create([
        'nome'=> $this -> nome,
        'quantidade'=> $this -> quantidade,
        'validade'=> $this -> validade,
        'lote'=> $this -> lote,
        'peso'=> $this -> peso,
        'valor'=> $this -> valor,

    ]);
    } 

    public function render()
    {
        return view('livewire.produto.produto-create');
    }
}
