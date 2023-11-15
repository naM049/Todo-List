<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Todo extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'user_id',
        'description',
        'completed',
    ];


    public function user(): BelongsTo
    {
        return $this->BelongsTo(User::class);
    }
}
