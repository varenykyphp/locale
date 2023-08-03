<?php

namespace VarenykyLocale\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    
    protected $table = 'countries';
    protected $fillable = [
        'name',
        'iso',
    ];
}