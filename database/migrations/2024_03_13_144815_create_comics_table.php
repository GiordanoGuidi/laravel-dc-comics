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
        Schema::create('comics', function (Blueprint $table) {
            $table->id();
            $table->string('title', 150)->unique();
            $table->text('description')->nullable();
            $table->string('thumb');
            $table->string('price', 10);
            $table->string('series');
            $table->date('sale_date');
            $table->string('type', 50);
            $table->string('artists', 150);
            $table->string('writers', 150);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comics');
    }
};
