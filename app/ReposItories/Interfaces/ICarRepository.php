<?php

namespace App\ReposItories\Interfaces;

use App\Models\Car;
use Illuminate\Database\Eloquent\Collection;

interface ICarRepository
{
    public function getAll() : Collection;
    public function getById(int $id) : ?Car;
}
