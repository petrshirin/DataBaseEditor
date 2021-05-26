<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    protected $model = Car::class;
    protected $name = "Машина";
    protected $namePlural = "Машины";
    protected $template = "CarView";

    public function getSuccessURL(): string
    {
        return '/cars/';
    }
}
