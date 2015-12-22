<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    //
  protected $fillable = [
    
    'company_name',
    'company_address',
    'company_type',
    
  ];
  
  public function user()
  {
    return $this->belongsTo('App\User');
  }
}
