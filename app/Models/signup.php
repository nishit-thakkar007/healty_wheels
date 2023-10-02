<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class signup extends Model
{
    use HasFactory;
    protected $table='signup';
    protected $primaryKey='id';
    protected $fillable=['name','address','email'];
    protected $hidden = [
        'pwd',
        
    ];

    
}