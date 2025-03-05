<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Invoice extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_id',
        'car_id',
        'user_id',
        'service_id',
        'appointment_date',
        'completion_date',
        'cost',
        'status',
        'note',
        'discount',
        'parts',
    ];

    protected $casts = [
        'parts' => 'array',
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function car()
    {
        return $this->belongsTo(ClientCar::class, 'car_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($invoice) {
            if (!$invoice->user_id) {
                $invoice->user_id = Auth::id();
            }
        });
    }
}
