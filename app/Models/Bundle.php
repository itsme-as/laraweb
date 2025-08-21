<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bundle extends Model
{
    use HasFactory;

    protected $table = 'bundles';
    protected $primaryKey = 'id';
    protected $fillable = [
        'title',
        'description',
        'normal_price',
        'selling_price',
        'created_at',
        'updated_at'
    ];
}