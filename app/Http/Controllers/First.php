<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class First extends Controller
{
public function index()
{
  return view ('shahriar');
}
public function index2()
{
  return view ('action');
}
}
