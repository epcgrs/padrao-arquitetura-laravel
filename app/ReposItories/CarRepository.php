<?php

namespace App\ReposItories;

use App\Models\Car;
use App\ReposItories\Interfaces\ICarRepository;
use Illuminate\Database\Eloquent\Collection;

class CarRepository implements ICarRepository
{
    public function getAll() : Collection
    {
        return Car::all();
    }

    public function getById(int $id) : ?Car
    {
        return Car::find($id);
    }
}
