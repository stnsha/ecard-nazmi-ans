<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Toyyib extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'status',
        'reason',
        'bill_code',
        'amount',
    ];
}
