<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LocalVotacao extends Model
{
    protected $table = 'local_votacao';
    protected $fillable = [
        'nome',
        'zona',
    ];
}
