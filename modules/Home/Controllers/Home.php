<?php
namespace Modules\Home\Controllers;
use App\Controllers\BaseController;
use Modules\Home\Models\HomeModel;

class Home extends BaseController
{
    public function index()
    {
        $HomeModel = new HomeModel();
        return view('Modules\Home\Views\index');
    }
}
