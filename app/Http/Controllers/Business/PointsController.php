<?php

namespace App\Http\Controllers\Business;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Points;
use App\Http\Requests\UpdatePoint;
use Prologue\Alerts\Facades\Alert;

class PointsController extends Controller
{
  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
    $point = Points::getEdit($id);

    $action    = 'update';
    $form_data = array('route' => array('company::games::update', $point->id), 'method' => 'PATCH');
    $name = 'Actualizar';

    return view('business/points/form', compact('action', 'point', 'form_data', 'name'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(UpdatePoint $request, $id)
  {
    $point = Points::getEdit($id);

    $data = $request->all();

    $point->fill($data)->save();

    Alert::success(trans('points.crud.updated'))->flash();

    return redirect()->route('company::dashboard');
  }
}
