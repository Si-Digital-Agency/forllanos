<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Specs extends Model
{
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */


    public $timestamps = false;


    public function specifications(): BelongsTo
    {
        return $this->belongsTo(Cars::class);
    }
}
