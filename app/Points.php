<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Points extends Model
{
  /**
   * The table associated with the model.
   *
   * @var string
   */
  protected $table = 'points';

  /**
   * Indicates if the model should be timestamped.
   *
   * @var bool
   */
  public $timestamps = false;

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'point'
  ];

  static public function getDashboard($company = null){
    return Points::select('points.id','point','game','team')
        ->join('games', 'games.id', '=', 'points.fk_game')
        ->join('company2team', 'company2team.id', '=', 'points.fk_c2t')
        ->join('teams', 'teams.id', '=', 'company2team.fk_team')
        ->where('fk_company', $company)
        ->orderBy('games.id')->orderBy('point','desc')->get();
  }

  static public function getEdit($id = null){
    return Points::select('points.id','point','game','team')
        ->join('games', 'games.id', '=', 'points.fk_game')
        ->join('company2team', 'company2team.id', '=', 'points.fk_c2t')
        ->join('teams', 'teams.id', '=', 'company2team.fk_team')
        ->where('points.id', $id)
        ->get()->first();
  }
}
