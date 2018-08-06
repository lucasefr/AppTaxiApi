<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Concessionaria; 
use App\Usuario; 





class TestDrive extends Model
{
    //
    

    protected $table = 'testdrives';
    protected $primaryKey = 'idTestDrives';
    public $timestamps = true;
    protected $fillable = [
        'data',
        'usuarios_id',
        'concessionarias_id'
    ];
    protected $guarded = [];

    
    public function usuario(): HasOne {
        return $this->hasOne(Usuario::class, 'usuarios_id');
    }

    public function testDrives(): BelongsTo {
        return $this->belongsTo(TestDrive::class);
    }


}
