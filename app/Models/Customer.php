<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Customer extends Model
{
    use HasFactory;

    protected $primaryKey = 'customerNumber';

    protected $keyType = 'string';

    public $timestamps = false;

    public $incrementing = false;

    protected $fillable = [
        'customerNumber',
        'customerName',
        'contactLastName',
        'contactFirstName',
        'phone',
        'addressLine1',
        'addressLine2',
        'city',
        'state',
        'postalCode',
        'country',
        'salesRepEmployeeNumber',
        'creditLimit'
    ];

    public function payment(): HasMany
    {
        return $this->hasMany(Payment::class, 'customerNumber', 'customerNumber');
    }

    public function order(): HasMany
    {
        return $this->hasMany(Order::class, 'customerNumber', 'customerNumber');
    }

    public function employee(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'employeeNumber', 'salesRepEmployeeNumber');
    }
}