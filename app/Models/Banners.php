<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;


class Banners extends Model
{
     /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
    */
    public $timestamps = false;

    public function baners(): HasOne
    {
        return $this->hasOne(Cars::class);
    }
}
