<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jelentkezo extends Model
{
    use HasFactory;

    protected $table = 'jelentkezo';

    protected $fillable = [
        'nev',
        'nem',
    ];

    public $timestamps = false;

    public function jelentkezesek()
    {
        return $this->hasMany(Jelentkezes::class, 'jelentkezoid');
    }
}
