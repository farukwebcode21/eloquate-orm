<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void{
        Schema::create('product_details', function (Blueprint $table) {
            $table->id();
            $table->string('image_1', 200);
            $table->string('image_2', 200);
            $table->string('image_3', 200);
            $table->string('image_4', 200);
            $table->longText('des');
            $table->string('color', 200);
            $table->string('size', 200);
            $table->unsignedBigInteger('product_id')->unique();
            $table->foreign('product_id')->references('id')->on('products')->restrictOnDelete()->cascadeOnUpdate();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void{
        Schema::dropIfExists('product_details');
    }
};
