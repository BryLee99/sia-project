<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Friends extends Model
{
    use HasFactory;

    protected $fillable = [
        'uid',
        'user_name',
        'nick_name',
    ];

    public function container() {
        return $this->belongsTo('App\Models\Friend', 'nick_name', 'id');
    }
}
