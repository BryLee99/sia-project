<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Friends extends Model
{
    use HasFactory;

    protected $fillable = [
        'last_name',
        'first_name',
        'middle_name',
        'age',
        'birthday'
    ];

    public function container() {
        return $this->belongsTo('App\Models\Friends', 'last_name', 'id');
    }
}
