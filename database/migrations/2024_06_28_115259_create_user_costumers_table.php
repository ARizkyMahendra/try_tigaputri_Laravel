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
        Schema::create('user_costumers', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('kurir');
            $table->string('alamat');
            $table->string('alergi');
            $table->string('paket');
            $table->string('no_tlp');
            $table->date('tgl_mulai');
            $table->date('tgl_selesai');
            $table->string('keterangan')->default('-');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_costumers');
    }
};
