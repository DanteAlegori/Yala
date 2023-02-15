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
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('category_id')->unsigned()->nullable();
            $table->bigInteger('brand_id')->unsigned()->nullable();
            $table->string('name', 100);
            $table->text('content')->nullable();
            $table->string('image', 50)->nullable();
            $table->decimal('price', 10, 2, true)->default(0);
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
        Schema::dropIfExists('product');
    }
};
