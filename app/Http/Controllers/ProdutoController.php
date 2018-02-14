<?php namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Request;
use App\Produto;

class ProdutoController extends Controller {

    public function lista() {
        $produtos = Produto::all();

        return view('produto.listagem')->with('produtos', $produtos);
    }

    public function mostra() {
        $id = Request::route('id');
        $produto = Produto::find($id);
        return view('produto.detalhes')->with('produto', $produto);
    }

    public function novo() {
        return view('formulario');
    }

    public function adiciona() {
        $params = Request::all();
        $produto = new Produto($params);
        $produto->save();   

        return redirect()->action('ProdutoController@lista')->withInput(Request::only('nome'));
    }

    public function listaJson() {
        $produtos = DB::select('select * from produtos');
        return response()->json($produtos);;
    }
}
