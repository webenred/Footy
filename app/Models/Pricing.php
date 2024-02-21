<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Pricing extends Model
{
    use HasFactory;
    protected $fillable = [
        'base_formula',
        'extra_formula'
    ];

    public function service() : HasOne
    {
        return $this->hasOne(Service::class);
    }
}
