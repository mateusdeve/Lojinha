<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produtos;
use Illuminate\Support\Facades\DB;

class ProdutosController extends Controller
{
    private $produtos;

    public function __construct(Produtos $produtos){
        $this->produtos = $produtos;
    }
    public function index () {
        return [
            "produtos" => $this->produtos->select('id', 'nome')->get(),
        ];
    }

    public function store (Request $request) {
        header('Access-Control-Allow-Origin: http://localhost:3000');
        return $request->all();
    }
}
