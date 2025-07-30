<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
// use Illuminate\Database\Eloquent\Relations\;
class Cars extends Model
{
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */


    public $timestamps = false;
    public function specifications(): HasOne
    {
        return $this->hasOne(Specs::class);
    }

    public function info(): HasOne
    {
        return $this->hasOne(Info::class);
    }

    public function colors(): BelongsToMany
    {
        return $this->belongsToMany(Colors::class);
    }
}
