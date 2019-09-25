<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRelacionamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('relacionamentos', function (Blueprint $table) {
            $table->integer('vendedor_id')->unsigned();
            $table->foreign('vendedor_id')
                    ->references('id')
                    ->on('vendedores')
                    ->onDelete('cascade');

            $table->integer('produto_id')->unsigned();
            $table->foreign('produto_id')
                    ->references('id')
                    ->on('produtos')
                    ->onDelete('cascade');

            $table->integer('venda_id')->unsigned();
            $table->foreign('venda_id')
                    ->references('id')
                    ->on('vendas')
                    ->onDelete('cascade');

            $table->integer('categoria_id')->unsigned();        
            $table->foreign('categoria_id')
                    ->references('id')
                    ->on('categorias')
                    ->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('relacionamentos');
    }
}
