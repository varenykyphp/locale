<?php

namespace VarenykyLocale\Repositories;

use VarenykyLocale\Models\Country;
use Varenyky\Repositories\Repository;

class CountryRepository extends Repository
{
    /**
     * To initialize class objects/variable.
     */
    public function __construct(Country $model)
    {
        $this->model = $model;
    }
}
