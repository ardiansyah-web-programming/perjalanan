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
        Schema::create('status', function (Blueprint $table) {
            $table->id();
            $table->string('nama_status')->unique();
            $table->bigInteger('id_nama_status_jenis')->unsigned();
            $table->timestamps();

            $table->foreign('id_nama_status_jenis')
                ->references('id')->on('status_jenis')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('status');
    }
};
