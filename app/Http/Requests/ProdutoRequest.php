<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProdutoRequest extends FormRequest {
    public function authorize() {
        return true;
    }

    public function rules() {
        return [
            'nome' => 'required|min:2',
            'descricao' => 'max:255',
            'valor' => 'required|numeric',
            'quantidade' => 'required|numeric',
            'tamanho' => 'required|max:100'
        ];
    }

    public function messages() {
        return [
            'nome.required' => 'O campo nome é obrigatório',
            'valor.required' => 'O campo valor é obrigatório',
            'quantidade.required' => 'O campo quantidade é obrigatório',
            'tamanho.required' => 'O campo tamanho é obrigatório',
            'nome.min' => 'O campo nome precisa ter no mínimo 2 caracteres',
            'descricao.max' => 'O campo descriçãoo não pode ter mais do que 255 caracteres',
            'tamanho.max' => 'O campo tamanho não pode ter mais do que 100 caracteres',
            'valor.numeric' => 'O campo valor precisa ser numérico',
            'quantidade.numeric' => 'O campo quantidade precisa ser numérico'
        ];
    }
}
