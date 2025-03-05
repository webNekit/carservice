<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'last_name',
        'first_name',
        'phone'
    ];

    public function cars()
    {
        return $this->hasMany(ClientCar::class, 'client_id');
    }

    public function getFullNameAttribute()
    {
        return "{$this->last_name} {$this->first_name}";
    }
}
