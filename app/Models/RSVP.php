<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RSVP extends Model
{
    use SoftDeletes;

    protected $table = 'rsvp';

    protected $fillable = [
        'name',
        'is_attend',
        'time_slot',
        'wishes',
        'pax'
    ];
}
