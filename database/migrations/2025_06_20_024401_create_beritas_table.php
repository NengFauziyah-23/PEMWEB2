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
        Schema::create('beritas', function (Blueprint $table) {
            $table->id();
            $table->string('judul', 150)->required();
            $table->string('ringkasan', 255)->nullable();
            $table->text('isi')->required();
            $table->string('penulis', 100)->required();
            $table->date('tanggal')->required();
            $table->integer('jumlah_like')->default(0);
            $table->string('gambar')->nullable();
            $table->foreignId('kategori_berita_id')->constrained('kategori_beritas')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('beritas');
    }
};
