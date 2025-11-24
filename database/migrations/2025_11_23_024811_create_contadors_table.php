<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('contadors', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('total_downloads')->default(0); // campo do contador
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('contadors');
    }
};
