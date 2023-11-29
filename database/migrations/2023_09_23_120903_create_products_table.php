<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->mediumText('image');
            $table->mediumText('image2')->nullable();
            $table->mediumText('image3')->nullable();
            $table->mediumText('image4')->nullable();
            $table->double('price');
            $table->string('stock')->nullable();
            $table->text('descrption');
            $table->text('descrptionLong');
            $table->string('width')->nullable();
            $table->string('height')->nullable();
            $table->string('Depth')->nullable();
            $table->string('Weight')->nullable();
            $table->string('Qualitycheck')->nullable();
            $table->integer('quantity');
            $table->unsignedBigInteger('store_id');
            $table->unsignedBigInteger('category_id');
            $table->string('status');
            $table->timestamps();
            $table->foreign('store_id')->references('id')->on('stores')->onDelete('CASCADE');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
