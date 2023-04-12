<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Train extends Model
{
    protected $fillable = [
        'azienda', 'stazione_partenza', 'stazione_arrivo', 'orario_partenza', 'orario_arrivo', 'codice_treno', 'numero_carrozze', 'in_orario', 'cancellato'
    ];
    
    public function scopeRecentlyDeparted($query)
    {
        return $query->whereDate('orario_partenza', '>=', now()->toDateString())
                     ->where('cancellato', false)
                     ->where('in_orario', true)
                     ->orderBy('orario_partenza', 'asc');
    }
}
