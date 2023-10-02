<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class wheels extends Model
{
    use HasFactory;
    protected $table="wheels";
    protected $primaryKey="id";
    protected $fillable=['product','price','img','desc'];

}
