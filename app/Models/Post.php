<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    /**
     * fillable
     * 
     * @var array
     */
    protected $fillable = [
        'image',
        'nama',
        'jurusan',
        'nomor',
        'email',
        'alamat',
       
    ];
}
