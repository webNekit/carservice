<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_id',
        'car_id',
        'invoice_id',
        'service_id',
        'appointment_date',
        'completion_date',
        'cost',
        'note',
        'parts',
    ];

    protected $casts = [
        'parts' => 'array',
    ];

    protected $with = ['client', 'car', 'service']; // <-- Автозагрузка связей

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function car()
    {
        return $this->belongsTo(ClientCar::class, 'car_id');
    }

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
