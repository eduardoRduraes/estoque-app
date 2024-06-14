<?php

namespace App\Http\Controllers;
use App\Http\Requests\ProdutosRequest;
use App\Models\Produto;
use Illuminate\Auth\Events\Validated;
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

    public function adicionar(ProdutosRequest $req){
//        $validator = $req->validate([
//            'nome' => 'required|min:5',
//            'descricao' => 'required|max:200',
//            'preco' => 'required|numeric',
//            'saldo' => 'required|numeric',
//        ]);
//
//        if($validator-> fails()){
//            return redirect('novo');
//        }
        Produto::create($req->all());
        return redirect()->route('lista')->withInput($req->only('nome'));
    }
    public function atualizar(Request $req){
        $produto = Produto::find($req->id);
        $produto->update($req->all());
        return redirect()->route('lista');
    }

}
