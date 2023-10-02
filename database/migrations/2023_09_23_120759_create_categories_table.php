<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
 
    public function up(): void
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->mediumText('image');
            $table->string('name');
            $table->unsignedBigInteger('store_id');
            $table->timestamps();
             $table->foreign('store_id')->references('id')->on('stores')->onDelete('CASCADE');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
