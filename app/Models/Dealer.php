<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dealer extends Model
{
    use HasFactory;
    protected $filable = [
            'company',
            'name',
            'area',
            'phone',
            'image'
        ];

    public static function find(int $id)
    {
    }
}