<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class SuratTerbit extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = ['pengajuan_id', 'nomor_surat', 'file_path', 'tanggal_terbit'];

    public function pengajuan()
    {
        return $this->belongsTo(SuratPengajuan::class, 'pengajuan_id');
    }
}
