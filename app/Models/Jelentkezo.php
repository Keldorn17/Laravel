<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Jelentkezo extends Model
{
    use HasFactory;

    protected $table = 'jelentkezo';

    protected $fillable = [
        'nev',
        'nem',
    ];

    public $timestamps = false;

    public function jelentkezesek(): HasMany
    {
        return $this->hasMany(Jelentkezes::class, 'jelentkezoid');
    }
}
