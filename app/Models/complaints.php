<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class complaints extends Model
{
    use HasFactory;
    protected $table='complaints';
    protected $primaryKey='id';
    protected $fillable=['name','email','vechicle','desc'];
   
}
