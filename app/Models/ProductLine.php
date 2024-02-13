<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ProductLine extends Model
{
    use HasFactory;

    protected $table = 'productlines';

    protected $primaryKey = 'productLine';

    protected $keyType = 'string';

    public $timestamps = false;

    public $incrementing = false;

    protected $fillable = [
        'productLine',
        'textDescription',
        'htmlDescription',
        'image'
    ];

    public function product(): HasMany
    {
        return $this->hasMany(Product::class, 'productLine', 'productLine');
    }
}
