<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\property;
use App\Models\Tenant;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class PropertyUnit extends Model
{
    use HasFactory;
    protected $fillable = [
        'proprty_id',
        'block',
        'floor',
        'label',
        'class',
        'type',
        'fit_out',
        'managed',
        'size',
        'beds',
        'baths',
        'status',
        'description',
        'rent_amount',
        'rent_deposit',
        'electricity_deposit',
        'water_deposit',
        'other_deposit'
    ];
    public function property(): BelongsTo
    {
        return $this->belongsTo(property::class);
    }
    public function tenant(): HasOne
    {
        return $this->hasOne(Tenant::class);
    }

}
