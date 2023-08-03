<?php

namespace Varenyky\Models\Language;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    protected $fillable = [
        'name',
        'iso',
    ];
}