<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Concessionaria; 
use App\Usuario; 

use App\Interfaces\Personable;
use App\Traits\Personable as PersonableTrait;


class TestDrive extends Model
{
    //
    

    protected $table = 'testdrives';
    protected $primaryKey = 'idTestDrives';
    public $timestamps = true;
    protected $fillable = [
        'data',
        'usuarios_id',
    ];
    protected $guarded = [];

    public function usuarios():BelongsTo{
        return $this->belongsTo(Usuario::class);
    }
}
