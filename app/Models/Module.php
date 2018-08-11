<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    public $incrementing = false;
    protected $primaryKey = 'code';
    protected $fillable = [
        'code', 'name'
    ];

    public function number_series_list()
    {
        return $this->hasMany(NumberSeries::class, 'module_code');
    }
}
