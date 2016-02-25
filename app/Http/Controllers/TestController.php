<?php
/**
 * Created by PhpStorm.
 * User: lipeng
 * Date: 16/2/24
 * Time: 下午10:35
 */

namespace App\Http\Controllers;


class TestController extends Controller
{
    public function index()
    {
        return view('test');
    }
}