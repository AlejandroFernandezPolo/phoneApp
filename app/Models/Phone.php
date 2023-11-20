<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phone extends Model {
    use HasFactory;
    
    protected $table = 'phone';
    
    protected $fillable = ['name', 'brand', 'storage', 'weight', 'camera', 'batery', 'screen'];
}
