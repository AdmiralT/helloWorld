<?php
# @Date:   2019-09-24T15:02:27+01:00
# @Last modified time: 2019-09-24T15:04:30+01:00




namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function hello()
    {
      return view('hello');
    }

}
