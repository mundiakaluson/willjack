<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Landlord;
use App\Models\PropertyUnit;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class property extends Model
{
    use HasFactory;
    protected $fillable =
    [
        'landlord_id',
        'class',
        'category',
        'type',
        'alias',
        'plot_number',
        'country',
        'region',
        'town',
        'area',
        'physical_address',
        'office',
        'assinged_to',
        'contract_duration_start',
        'contract_duration_end',
        'auto_renew',
        'agreement_fee',
        'commmission_fee',
        'letting_commission_rate',
        'charge',
        'vat_on_commission_mode',
        'tenant_deposit_mode',
        'tenant_deposit_electricity',
        'tenant_deposit_water',
        'tenant_deposit_other',
        'account_name',
        'payment_date',
        'disbursment_mode',
        'payment_branch',
        'payment_account_number',
        'payment_ratio',
        'property_code',
    ];
    public function landlord(): BelongsTo
    {
        return $this->belongsTo(Landlord::class);
    }
    public function property_unit(): HasMany
    {
        return $this->hasMany(PropertyUnit::class);
    }
}
