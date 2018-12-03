<?php

namespace App\Http\Controllers\Business;

use App\Business;
use App\Points;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
  public function show() {

    $points = Points::getDashboard(Auth::user()->fk_company);
    $name = Business::getCompanyName(Auth::user()->fk_company);

    return view('dashboard', compact('points', 'name'));
  }
}