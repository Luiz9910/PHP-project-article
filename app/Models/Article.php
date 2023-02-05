<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class article extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function user() {
        return $this->belongsTo('App\Models\User');
    }

    public function school_lists()
    {
        return $this->belongsTo(SchoolsList::class);
    }

    public function requisition()
    {
        return $this->hasMany(Requisition::class);
    }
}
