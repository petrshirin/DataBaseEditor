<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Employee;
use App\Models\Work;
use App\Models\WorkType;
use Illuminate\Http\Request;

class WorkController extends Controller
{
    protected $model = Work::class;
    protected $name = "Работа";
    protected $namePlural = "Работы";
    protected $template = "WorkView";

    public function getSuccessURL(): string
    {
        return '/works/';
    }
    protected function updateContext(): array
    {
        return array_merge(parent::updateContext(), array(
            'cars' => Car::all(),
            'employees' => Employee::all(),
            'workTypes' => WorkType::all()
        ));
    }
}
