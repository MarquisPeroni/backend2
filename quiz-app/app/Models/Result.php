<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'quiz_id', 'score'];

    // Un risultato appartiene a un utente
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Un risultato appartiene a un quiz
    public function quiz()
    {
        return $this->belongsTo(Quiz::class);
    }
}
