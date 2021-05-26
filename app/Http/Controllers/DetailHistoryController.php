<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Detail;
use App\Models\DetailHistory;
use Illuminate\Http\Request;

class DetailHistoryController extends Controller
{
    protected $model = DetailHistory::class;
    protected $name = "История детали";
    protected $namePlural = "История деталей";
    protected $template = "DetailHistoryView";

    public function getSuccessURL(): string
    {
        return '/detailHistories/';
    }
    protected function updateContext(): array
    {
        $context = array(
            'cars' => Car::all(),
            'details' => Detail::all()
        );
        return array_merge(parent::updateContext(), $context);
    }
}
