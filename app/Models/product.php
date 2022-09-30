<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $tabler= 'products';
    protected $primaryKey ='id';
    protected $fillable = ['name', 'detail'];
}
