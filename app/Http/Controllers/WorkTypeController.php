<?php

namespace App\Http\Controllers;

use App\Models\WorkType;
use Illuminate\Http\Request;

class WorkTypeController extends Controller
{
    protected $model = WorkType::class;
    protected $name = "Вид работы";
    protected $namePlural = "Виды работ";
    protected $template = "WorkTypeView";

    public function getSuccessURL(): string
    {
        return '/workTypes/';
    }
}
