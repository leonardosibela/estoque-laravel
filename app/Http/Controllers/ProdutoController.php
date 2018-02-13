<?php namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Request;

class ProdutoController extends Controller {

    public function lista() {
        $produtos = DB::select('select * from produtos');

        return view('produto.listagem')->with('produtos', $produtos);
    }

    public function mostra() {
        $id = Request::route('id');

        $resposta = DB::select('select * from produtos where id = ?', [$id]);

        if(empty($resposta)) {
            return "Esse produto não existe";
        }
        return view('produto.detalhes')->with('produto', $resposta[0]);
    }

    public function novo() {
        return view('formulario');
    }

    public function adiciona() {
        $nome = Request::input('nome');
        $valor = Request::input('valor');
        $quantidade = Request::input('quantidade');
        $descricao = Request::input('descricao');
        
        DB::select('insert into produtos (nome, valor, quantidade, descricao) values (?, ?, ?, ?)', 
            [$nome, $valor, $quantidade, $descricao]);

        return redirect()->action('ProdutoController@lista')->withInput(Request::only('nome'));
    }

    public function listaJson() {
        $produtos = DB::select('select * from produtos');
        return $produtos;
    }
}
