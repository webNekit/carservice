<?php

namespace App\Models;

use App\Models\CarModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarBrand extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function models() {
        return $this->hasMany(CarModel::class);
    }
}
