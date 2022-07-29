<?php

namespace App\Services\Interfaces;

use App\Models\Car;
use Illuminate\Support\Collection;

interface ICarService
{
    public function getAll() : Collection;
    public function getById(int $id) : ?Car;
}
