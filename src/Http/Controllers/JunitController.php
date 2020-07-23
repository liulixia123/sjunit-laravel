<?php
namespace Lisa18\JunitLaravel\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller; // 这是laravel的基类控制器

class JunitController extends Controller{

	public function index()
    {
        return view('junit::index');
    }
}