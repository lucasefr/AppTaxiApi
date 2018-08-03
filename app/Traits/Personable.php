<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

use App\Usuario;

trait Personable
{
    public function usuarios():BelongsTo{
        return $this->belongsTo(Usuario::class);
    }

}