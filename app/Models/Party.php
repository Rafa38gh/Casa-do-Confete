<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Party extends Model
{
    use HasFactory;

    /* Especifica quais colunas podem ser preenchidas durante o cadastro */
    protected $fillable = [
        'user_id',
        'name',
        'age',
        'invites',
        'food',
        'date',
        'status'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);   /* Procura pelo 'User' Model que possua um 'id' igual ao 'user_id' */
    }
}
