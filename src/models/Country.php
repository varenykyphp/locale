<?php

namespace VarenykyLocale\Models\Country;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $fillable = [
        'name',
        'iso',
    ];
}