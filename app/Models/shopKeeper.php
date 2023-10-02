<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class shopKeeper extends Model
{
    
        protected $table='shopkeeeper';
        protected $primaryKey='id';
        protected $fillable=['name','email','store','address','pin'];
        protected $hidden = [
            'pwd',
        
        ];
    
        use HasFactory;
    
    
}
