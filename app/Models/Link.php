<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'link',
    ];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
