<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientCar extends Model
{
    use HasFactory;

    protected $table = 'client_cars';

    protected $fillable = [
        'client_id',
        'car_brand_id',
        'car_model_id',
        'vin',
        'number_plate',
        'mileage',
        'color',
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function brand()
    {
        return $this->belongsTo(CarBrand::class, 'car_brand_id');
    }

    public function model()
    {
        return $this->belongsTo(CarModel::class, 'car_model_id');
    }
}
