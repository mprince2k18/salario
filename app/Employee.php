<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employee extends Model
{
  use SoftDeletes;

  protected $dates = ['deleted_at'];

  protected $fillable = [
    'fname',
    'lname',
    'email',
    'nid',
    'dob',
    'gender_id',
    'blood',
    'designation_id',
    'joining_date',
    'basic_salary',
    'contact_number',
    'team',
    'status_id',
    'photo',
    'slug',
  ];
}
