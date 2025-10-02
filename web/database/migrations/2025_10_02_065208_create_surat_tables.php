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
        // Surat Template
        Schema::create('surat_templates', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('kategori');
            $table->longText('isi'); // isi template
            $table->timestamps();
            $table->softDeletes();
        });

        // Surat Pengajuan
        Schema::create('surat_pengajuans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->foreignId('template_id')->constrained('surat_templates')->cascadeOnDelete();
            $table->json('data'); // data pemohon (nama, alamat, dll)
            $table->enum('status', ['diajukan', 'diverifikasi', 'ditolak'])->default('diajukan');
            $table->timestamps();
            $table->softDeletes();
        });

        // Surat Terbit
        Schema::create('surat_terbits', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pengajuan_id')->constrained('surat_pengajuans')->cascadeOnDelete();
            $table->string('nomor_surat');
            $table->string('file_path');
            $table->date('tanggal_terbit');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('surat_terbits');
        Schema::dropIfExists('surat_pengajuans');
        Schema::dropIfExists('surat_templates');
    }
};
