<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    use HasFactory;
    
    protected $table = 'artist';

    public $timestamps = false;
    
    protected $fillable = ['name'];
    
    public function disks () {
        return $this->hasMany('App\Models\Disk', 'idartist');
    }

}
