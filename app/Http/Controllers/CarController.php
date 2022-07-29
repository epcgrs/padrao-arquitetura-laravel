<?php

namespace App\Http\Controllers;

use App\Services\Interfaces\ICarService;
use Illuminate\Http\Request;

class CarController extends Controller
{
    protected ICarService $carService;

    public function __construct(ICarService $carService)
    {
        $this->carService = $carService;
    }

    public function getAll()
    {
        return response()->json(['cars' => $this->carService->getAll()]);
    }
}
