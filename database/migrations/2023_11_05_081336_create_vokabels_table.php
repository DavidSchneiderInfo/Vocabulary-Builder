<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('vocables', function (Blueprint $table) {
            $table->id();
            $table->string('foreign_term')->unique();
            $table->string('native_term')->unique();
            $table->timestamps();
            $table->unsignedTinyInteger('level')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vocables');
    }
};