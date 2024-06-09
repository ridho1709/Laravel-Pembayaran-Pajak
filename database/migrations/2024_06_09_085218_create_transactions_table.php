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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string('npwp',16);
            $table->unique('npwp');
            $table->string('nama',50);
            $table->string('jenis_usaha',50);
            $table->string('jenis_pajak',20);
            $table->text('alamat',100);
            $table->string('no_tlpn',20);
            $table->date('tanggal');
            $table->string('total',100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
