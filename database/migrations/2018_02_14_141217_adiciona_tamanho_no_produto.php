<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AdicionaTamanhoNoProduto extends Migration
{
    public function up() {
        Schema::table('produtos', function($table) {
            $table->string('tamanho', 100)->default('Não tem tamanho'); 
        });
    }

    public function down() {
        Schema::table('produtos', function($table) {
            $table->dropColumn('tamanho'); 
        });
    }
}
