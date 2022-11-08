<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surkels', function (Blueprint $table) {
            $table->id();
            $table->string('index', 100);
            $table->string('date', 100);
            $table->string('kode_surat', 100);
            $table->string('alamat', 100);
            $table->string('tanggal', 100);
            $table->string('perihal', 100);
            $table->string('file', 100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('surkels');
    }
};
