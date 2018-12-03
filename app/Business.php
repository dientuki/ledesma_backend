<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
  /**
   * The table associated with the model.
   *
   * @var string
   */
  protected $table = 'business';

  /**
   * Indicates if the model should be timestamped.
   *
   * @var bool
   */
  public $timestamps = false;

  static public function getCompanyName($company = null){
    return Business::where('id', $company)->value('company');
  }
}
