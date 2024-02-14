<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Property;

class Landlord extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'first_name',
        'last_name',
        'initials',
        'pin_number',
        'vat_number',
        'postal_address',
        'email',
        'phone_number',
        'alternative_phone_number',
        'office',
    ];
    public function property(): HasMany
    {
        return $this->hasMany(Property::class);
    }
}
