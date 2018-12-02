<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;

class DashboardController extends Controller
{
  public function show() {

    return view('dashboard');
  }
}