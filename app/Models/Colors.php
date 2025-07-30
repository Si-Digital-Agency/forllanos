<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;


class Colors extends Model
{
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
    */
    public $timestamps = false;

    public function colors(): BelongsToMany
    {
        return $this->belongsToMany(Cars::class);
    }
}
