<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'slug',
        'name',
        'description',
    ];
    
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function typeService()
    {
        return $this->belongsTo(Type::class);
    }

    public function pricing()
    {
        return $this->belongsTo(Pricing::class);
    }
}
