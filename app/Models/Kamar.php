<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kamar extends Model
{
    use HasFactory;
    protected $table = 'kamars';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function pemesanans()
    {
        return $this->hasMany(Pemesanan::class);
    }
}
