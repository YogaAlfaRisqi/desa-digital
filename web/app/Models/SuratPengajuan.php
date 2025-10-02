<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class SuratPengajuan extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = ['user_id', 'template_id', 'data', 'status'];

    protected $casts = [
        'data' => 'array',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function template()
    {
        return $this->belongsTo(SuratTemplate::class, 'template_id');
    }

    public function terbit()
    {
        return $this->hasOne(SuratTerbit::class, 'pengajuan_id');
    }
}
