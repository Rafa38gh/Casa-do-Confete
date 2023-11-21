<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Invite extends Model
{
    use HasFactory;

    protected $fillable = [
        'party_id',
        'name',
        'cpf',
        'age'
    ];

    public function party(): BelongsTo
    {
        return $this->belongsTo(Party::class);
    }
}
