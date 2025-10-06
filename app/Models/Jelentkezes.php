<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jelentkezes extends Model
{
    use HasFactory;

    protected $table = 'jelentkezes';

    protected $fillable = [
        'jelentkezoid',
        'kepzesid',
        'sorrend',
        'szerzett',
    ];

    public $timestamps = false;

    public function jelentkezo()
    {
        return $this->belongsTo(Jelentkezo::class, 'jelentkezoid');
    }

    public function kepzes()
    {
        return $this->belongsTo(Kepzes::class, 'kepzesid');
    }
}
