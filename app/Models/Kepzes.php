<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kepzes extends Model
{
    use HasFactory;

    protected $table = 'kepzes';

    protected $fillable = [
        'nev',
        'felveheto',
        'minimum'
    ];

    public $timestamps = false;

    public function jelentkezesek()
    {
        return $this->hasMany(Jelentkezes::class, 'kepzesid');
    }
}
