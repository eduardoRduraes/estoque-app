<?php

namespace App\Http\Controllers;
use App\Models\Produto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProdutoControler extends Controller
{
    public function lista(){
//        $produtos = DB::select('select * from produtos_table');
        $produtos = Produto::all();
        return view("produto.listagem")->withProdutos($produtos);
    }

    public function mostrar(Request $req){
        $produto = Produto::find($req->id);
        return view("produto.detalhar")->withProduto($produto);
    }

    public function novo(){
        return view("produto.novo");
    }

    public function deletar(Request $req){
        $produto = Produto::find($req->id);
        $produto->delete();
        return redirect()->route('lista');
    }

    public function adicionar(Request $req){
        $produto = new Produto;
        $produto->nome = $req->nome;
        $produto->descricao = $req->descricao;
        $produto->preco = $req->preco;
        $produto->saldo = $req->saldo;
        $produto->save();
        return redirect()->route('lista')->withInput();
    }
    public function atualizar(Request $req){
        $produto = Produto::find($req->id);
        $produto->nome = $req->nome;
        $produto->descricao = $req->descricao;
        $produto->preco = $req->preco;
        $produto->saldo = $req->saldo;
        $produto->save();
        return redirect()->route('lista');
    }

}
