<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index() {

        $fornecedores = [
            0 => [
                'nome' =>'Fornecedor 1',
                'status'=> 'N',
                'cnpj'=> '0',
                'ddd'=> '', //SP
                'telefone' =>'0000-0000'
            ],

            1=> [
                'nome' =>'Fornecedor 2',
                'status'=> 'S',
                'cnpj'=> 'null',
                'ddd'=> '85', //Fortaleza (CE)
                'telefone' =>'0000-0000'
            ],
            
            2=> [
                'nome' =>'Fornecedor 2',
                'status'=> 'N',
                'cnpj'=> '2',
                'ddd'=> '42', //Parana
                'telefone' =>'0000-0000'
            ],

            3=> [
                'nome' =>'Fornecedor 3',
                'status'=> 'S',
                'cnpj'=> '4',
                'ddd'=> '42', //Parana
                'telefone' =>'0000-0000'
            ],

            4=> [
                'nome' =>'Fornecedor 4',
                'status'=> 'N',
                'cnpj'=> '3',
                'ddd'=> '42', //Parana
                'telefone' =>'0000-0000'
            ],
        ];
    }
}
