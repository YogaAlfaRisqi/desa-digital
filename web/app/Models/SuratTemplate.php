<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SuratTemplate extends Model
{
    //
    use HasFactory,SoftDeletes;

    protected $fillable = ['nama', 'kategori', 'isi'];

    public function pengajuans()
    {
        return $this->hasMany(SuratPengajuan::class, 'template_id');
    }
}
