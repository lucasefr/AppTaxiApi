<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Concessionaria; 
use App\User; 





class TestDrive extends Model
{
    //
    

    protected $table = 'testdrives';
    protected $primaryKey = 'idTestDrives';
    public $timestamps = true;
    protected $fillable = [
        'data',
        'users_id',
        'concessionarias_id'
    ];
    protected $guarded = [];

    
    public function users(): HasOne {
        return $this->hasOne(User::class, 'users_id');
    }

    public function testDrives(): BelongsTo {
        return $this->belongsTo(TestDrive::class);
    }


}
