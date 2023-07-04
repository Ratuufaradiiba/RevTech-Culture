<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $table = 'comment';

    protected $fillable = ['nama_commenter', 'isi_comment', 'waktu_comment', 'culture_id'];

    public function culture()
    {
        return $this->belongsTo(Culture::class, 'culture_id', 'id');
    }

    public function reply()
    {
        return $this->hasMany(Reply::class);
    }

    
}
