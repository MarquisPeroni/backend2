<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'created_by'];

    // Un quiz può avere molte domande
    public function questions()
    {
        return $this->hasMany(Question::class);
    }

    // Un quiz può avere molti risultati
    public function results()
    {
        return $this->hasMany(Result::class);
    }

    // Un quiz appartiene a un utente (il creatore)
    public function user()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
}
