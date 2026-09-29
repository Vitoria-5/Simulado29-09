<?php

namespace App\Livewire\Produto;

use Livewire\Component;

class ProdutoEdit extends Component
{
    public $nome;
    public $quantidade;
    public $validade;
    public $lote;
    public $peso;
    public $valor;


    public function render()
    {
        return view('livewire.produto.produto-edit');
    }
}
