<?php

namespace App\Interfaces;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

interface Personable {
    public function usuarios():BelongsTo;
}