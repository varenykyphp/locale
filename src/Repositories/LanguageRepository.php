<?php

namespace VarenykyLocale\Repositories;

use VarenykyLocale\Models\Language;

class LanguageRepository extends Repository
{
    /**
     * To initialize class objects/variable.
     */
    public function __construct(Language $model)
    {
        $this->model = $model;
    }
}
