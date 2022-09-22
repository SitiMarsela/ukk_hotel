<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fasilitas_hotel extends Model
{
    use HasFactory;
    protected $table = 'fasilitas_hotels';
    protected $primaryKey = 'id';
    protected $guarded = [];
}
