<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Prodi;

class Testimonial extends Model
{
    use HasFactory;
    protected $table = 'reviews';
    protected $fillable = ['title', 'name', 'desc', 'position'];

    public function prodi() {
        return $this->belongsTo(Prodi::class, 'prodi_id', 'id');
    }
}
