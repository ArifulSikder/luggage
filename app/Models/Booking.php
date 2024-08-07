<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Booking extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    public function delivaryAgentHistory(){
        return $this->hasOne(DelivaryAgentHistory::class, 'booking_id');
    }

    public function hubPridelivaryAgentHistoriescing(){
        return $this->hasMany(DelivaryAgentHistory::class, 'booking_id');
    }
}
