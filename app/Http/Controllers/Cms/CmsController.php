<?php

namespace App\Http\Controllers\cms;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CmsController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        return view('cms.index');
    }
}
