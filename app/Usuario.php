<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

use App\TestDrive;


class Usuario extends Model
{
    //
    protected $table = 'usuarios';
    protected $primaryKey = 'idUsuarios';
    public $timestamps = true;
    protected $fillable = [
        'nome',
        'email',
        'idAparelho',
        'placaDoCarro',
        'telefone'
    ];
    protected $guarded = [];
    
    public function testDrive():BelongsTo{
        return $this->belongsTo(testDrive::class);
    }
}
