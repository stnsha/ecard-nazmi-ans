<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Gift extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'title',
        'pic_url',
        'item_url',
        'quantity',
        'is_reserved',
    ];
}
