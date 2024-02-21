<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Service extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'slug',
        'name',
        'description',
        'category_id',
        'type_id',
        'pricing_id'
    ];
    
    public function category() : BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function type() : BelongsTo
    {
        return $this->belongsTo(Type::class, 'type_id');
    }

    public function pricing() : BelongsTo
    {
        return $this->belongsTo(Pricing::class, 'pricing_id');
    }

    
}
