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
        Schema::create('pasiens', function (Blueprint $table) {
            $table->id();
            $table->string('kode', 10)->unique()->required();
            $table->string('nama', 40)->required();
            $table->string('tmp_lahir', 40);
            $table->date('tgl_lahir', 40);
            $table->char('gender', 1);
            $table->text('alamat', 200);
            $table->string('email', 50);
            $table->foreignId('Kelurahan_id')->constrained('kelurahans')->references('id')->cascadeOnDelete()->cascadeOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pasiens');
    }
};
