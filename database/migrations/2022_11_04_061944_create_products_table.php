<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nulltable();
            $table->string('description')->nulltable();
            $table->string('image')->nulltable();
            $table->string('catagory')->nulltable();
            $table->string('quantity')->nulltable();
            $table->string('price')->nulltable();
            $table->string('discount_price')->nulltable();
          
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
        Schema::dropIfExists('products');
    }
};
