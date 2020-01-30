<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductCategorieTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_categorie', function (Blueprint $table) {
            $table->increments('id');
            $table->string('naam');
            $table->string('afbeelding');
            $table->string('subnaam1');
            $table->string('subafbeelding1');
            $table->string('subnaam2');
            $table->string('subafbeelding2');
            $table->string('subnaam3');
            $table->string('subafbeelding3');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_categorie');
    }
}
