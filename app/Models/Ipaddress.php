<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ipaddress extends Model
{
    use HasFactory;
    protected $table = "ipaddress";
    protected $fillable = ['city', 'country', 'lat', 'lon'];
}
