<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Hub extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    public function hub_pricing(){
        return $this->hasMany(HubPricing::class, 'hub_id');
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
