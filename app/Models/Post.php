<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use HasFactory;

    protected $attributes = [
        //for Anonymous, temporary
        'user_id' => 1,
    ];
    protected $fillable = [
        'user_id',
        'content'
    ];

    public function user() :BelongsTo{
        return $this->belongsTo(User::class);
    }
}
