<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NumberSeries extends Model
{
    public $incrementing = false;
    protected $primaryKey = 'code';
    protected $fillable = [
        'code',
         'module_code',
         'starting_number',
         'ending_number',
         'last_number_used',
         'last_coded_number_used',
    ];
}
