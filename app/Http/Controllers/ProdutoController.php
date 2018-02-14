<?php namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Request;
use Validator;
use App\Produto;
use App\Http\Requests\ProdutoRequest;

class ProdutoController extends Controller {

    public function lista() {
        $produtos = Produto::all();

        return view('produto.listagem')->with('produtos', $produtos);
    }

    public function mostra($id) {
        $produto = Produto::find($id);
        return view('produto.detalhes')->with('produto', $produto);
    }

    public function novo() {
        return view('formulario');
    }

    public function adiciona(ProdutoRequest $request) {
        $params = $request->all();
        Produto::create($params);   
        return redirect()->action('ProdutoController@lista')->withInput(Request::only('nome'));
    }

    public function remove($id) {
        $produto = Produto::find($id);
        $produto->delete();
        return redirect()->action('ProdutoController@lista');
    }

    public function listaJson() {
        $produtos = DB::select('select * from produtos');
        return response()->json($produtos);;
    }
}
