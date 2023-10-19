<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    public function sheet()
    {
        return $this->belongsTo(Sheet::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
