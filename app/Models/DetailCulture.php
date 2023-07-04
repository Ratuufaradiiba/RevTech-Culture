<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailCulture extends Model
{
    use HasFactory;

    protected $table = 'detail_culture';

    protected $fillable = ['id_culture', 'sejarah_culture', 'makna_culture', 'ciri_culture', 'video_culture'];

    public function culture()
    {
        return $this->belongsTo(Culture::class, 'id_culture', 'id');
    }
}
