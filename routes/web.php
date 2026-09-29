<?php

use App\Livewire\Produto\ProdutoCreate;
use App\Livewire\Produto\ProdutoEdit;
use App\Livewire\Produto\ProdutoIndex;
use Illuminate\Support\Facades\Route;

Route::get('/produtos',ProdutoIndex::class) ->name('produtos.index');
Route::get('/produtos',ProdutoCreate::class) ->name('produtos.create');
Route::get('/produtos/{id}',ProdutoEdit::class) ->name('produtos.edit');