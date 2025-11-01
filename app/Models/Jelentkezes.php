<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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

    public function jelentkezo(): BelongsTo
    {
        return $this->belongsTo(Jelentkezo::class, 'jelentkezoid');
    }

    public function kepzes(): BelongsTo
    {
        return $this->belongsTo(Kepzes::class, 'kepzesid');
    }

}
