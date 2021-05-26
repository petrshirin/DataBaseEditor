<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Detail;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    protected $model = Detail::class;
    protected $name = "Деталь";
    protected $namePlural = "Детали";
    protected $template = "DetailView";

    public function getSuccessURL(): string
    {
        return '/details/';
    }
}
