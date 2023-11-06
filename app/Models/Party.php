<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Party extends Model
{
    use HasFactory;

    /* Especifica quais colunas podem ser preenchidas durante o cadastro */
    protected $fillable = [
        'name',
        'age',
        'invites',
        'food',
        'date'
    ];
}
