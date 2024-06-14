<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $fillable = ['quiz_id', 'content'];

    // Una domanda appartiene a un quiz
    public function quiz()
    {
        return $this->belongsTo(Quiz::class);
    }

    // Una domanda può avere molte risposte
    public function answers()
    {
        return $this->hasMany(Answer::class);
    }
}
