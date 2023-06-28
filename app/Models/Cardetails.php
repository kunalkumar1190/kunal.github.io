<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cardetails extends Model
{
    use HasFactory;

    protected $table = 'f_vehicles';
    protected $guarded = [''];
}
