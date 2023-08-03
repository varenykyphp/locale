<?php

namespace VarenykyLocale\Models;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    protected $fillable = [
        'name',
        'iso',
    ];
}