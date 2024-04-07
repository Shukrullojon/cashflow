<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Circle extends Model
{
    use HasFactory;

    protected $table = 'circles';

    protected $guarded = [];

    public function lang()
    {
        return $this->belongsTo(Lang::class);
    }
}
