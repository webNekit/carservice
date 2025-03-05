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

        static::updated(function ($invoice) {
            // Проверяем, изменился ли статус на "выполнено"
            if ($invoice->isDirty('status') && $invoice->status === 'выполнено') {
                \App\Models\History::create([
                    'invoice_id' => $invoice->id,
                    'client_id' => $invoice->client_id,
                    'car_id' => $invoice->car_id,
                    'service_id' => $invoice->service_id,
                    'user_id' => $invoice->user_id,
                    'appointment_date' => $invoice->appointment_date,
                    'completion_date' => $invoice->completion_date,
                    'cost' => $invoice->cost,
                    'note' => $invoice->note,
                    'discount' => $invoice->discount,
                    'parts' => $invoice->parts,
                ]);
            }
        });
    }
}
