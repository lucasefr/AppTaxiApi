<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\HasOne;

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
    
    public function testDrive(): hasOne {
        return $this->hasOne(TestDrive::class, 'usuarios_id');
    }
}
