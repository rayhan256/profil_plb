<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campus extends Model
{
    use HasFactory;
    protected $table = 'campus';
    protected $fillable = ['campus_name', 'call_centre', 'whatsapp', 'email', 'desc', 'embedded_map'];

}
