<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('scategories', function (Blueprint $table) {
            $table->id();
            $table->string('nomscategorie', 100)->unique();
            $table->string('imagescategorie', 250);
            $table->unsignedBigInteger('categorieID');
            $table->foreign('categorieID')
                  ->references('id')
                  ->on('categories')
                  ->onDelete('restrict');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('scategories');
    }
};