<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

abstract class Controller extends BaseController
{
    protected $model = NULL;
    protected $template;
    protected $name;
    protected $namePlural;
    abstract public function getSuccessURL();
    protected $context = array();

    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct()
    {
        $this->context = $this->updateContext();
    }

    protected function updateContext(): array
    {
        return array_merge($this->context, array("obj" => new $this->model()));
    }

    public function viewList(){
        $objects  = $this->model::all();
        $this->context = array_merge($this->context, array(
            "objects" => $objects,
            "name" => $this->namePlural,
            "modelClass" => new $this->model()
        ));
        return view($this->template, $this->context);
    }

    public function viewForm(Request $request, $objId=NULL) {
        if ($objId) {
            $obj = $this->model::where('id', $objId)->first();
        }
        else {
            $obj = new $this->model();
        }
        $this->context = array_merge($this->context, array(
            'obj' => $obj,
            "name" => $this->name,
        ));
        return view($this->template . "Form", $this->context);

    }

    public function processForm(Request $request, $objId=NULL) {
        $data = $request->all();
        unset($data['_token']);

        if ($objId) {
            $this->model::where('id', $objId)->first()->update($data);

        }
        else {
            $this->model::create($data);
        }

        return redirect($this->getSuccessURL());
    }

    public function deleteById(Request $request, $objId=NULL)
    {
        if ($objId) {
            $this->model::where('id', $objId)->delete();
        }
        return redirect($this->getSuccessURL());
    }
}
