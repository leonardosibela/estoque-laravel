<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model {
    
    public $timestamps = false;
    protected $table = 'produtos';
    protected $fillable = array('nome', 'descricao', 'quantidade', 'valor');

}
