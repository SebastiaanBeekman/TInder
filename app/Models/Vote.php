<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    use HasFactory;

    public function voter()
    {
        $this->belongsTo(User::class, 'voter_id');
    }

    public function voted()
    {
        $this->belongsTo(User::class, 'voted_id');
    }
}
