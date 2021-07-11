<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Testimonial;

class Prodi extends Model
{
    use HasFactory;
    protected $table = 'prodi';
    protected $fillable = ['image', 'name'];

    public function testimonial() {
        return $this->hasMany(Testimonial::class, 'id');
    }
}
