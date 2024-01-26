<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mention extends Model
{
    protected $fillable = [
        'user_id_source', 'user_id_target', 'artwork_id', 'comment_id',
    ];

    public function sourceUser()
    {
        return $this->belongsTo(User::class, 'user_id_source');
    }

    public function targetUser()
    {
        return $this->belongsTo(User::class, 'user_id_target');
    }

    public function artwork()
    {
        return $this->belongsTo(Artwork::class);
    }

    public function comment()
    {
        return $this->belongsTo(Comment::class);
    }
}
