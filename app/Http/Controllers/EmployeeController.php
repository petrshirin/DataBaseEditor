<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\WorkType;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    protected $model = Employee::class;
    protected $name = "Работник";
    protected $namePlural = "Работники";
    protected $template = "EmployeeView";

    public function getSuccessURL(): string
    {
        return '/employees/';
    }
    public function processForm(Request $request, $objId = NULL)
    {
        $data = $request->all();
        $workTypes = $request->request->get('workTypes');
        if ($objId) {
            $obj = Employee::where('id', $objId)->first();
            $obj->update($data);
        }
        else {
            $obj = Employee::create($data);
        }
        $obj->workTypes()->attach($workTypes);
        return redirect($this->getSuccessURL());
    }
    protected function updateContext(): array
    {
        $context = array(
            'workTypes' => WorkType::all()
        );
        return array_merge(parent::updateContext(), $context);
    }
}
