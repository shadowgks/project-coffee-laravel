<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plate extends Model
{
    use HasFactory;
    protected $table = 'plates';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'content',
        'price',
        'picture',
        'categorieID'
    ];
}
