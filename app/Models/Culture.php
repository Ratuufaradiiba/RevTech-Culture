<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Culture extends Model
{
    use HasFactory;

    protected $table = 'cultures';

    protected $fillable = ['nama_culture', 'desc_culture', 'gambar_culture', 'kategori_id'];
    protected $appends = ['totalCommentAndReply'];


    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'kategori_id', 'id');
    }

    public function detailculture()
    {
        return $this->hasOne(DetailCulture::class, 'id_culture', 'id');
    }

    public function comment()
    {
        return $this->hasMany(Comment::class);
    }

    public function views()
    {
        return $this->morphMany(View::class, 'viewable');
    }

    public function getTotalCommentAndReplyAttribute()
    {
        $totalComment = $this->comment()->count();
        $totalReply = $this->comment->sum(function ($comment) {
            return $comment->reply()->count();
        });

        return $totalComment + $totalReply;
    }
}
