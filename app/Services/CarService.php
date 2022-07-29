<?php

namespace App\Services;

use App\Models\Car;
use App\ReposItories\Interfaces\ICarRepository;
use App\Services\Interfaces\ICarService;
use Illuminate\Support\Collection;

class CarService implements ICarService
{
    private ICarRepository $carRepository;

    public function __construct(ICarRepository $carRepository)
    {
        $this->carRepository = $carRepository;
    }

    public function getAll(): Collection
    {
        return $this->carRepository->getAll()->map(function (Car $car) {
            $car->is_new = true;
            return $car->toArray();
        });
    }

    public function getById(int $id): ?Car
    {
        return $this->carRepository->getById($id);
    }

}
