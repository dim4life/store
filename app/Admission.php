<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Hrshadhin\Userstamps\UserstampsTrait;

class Admission extends Model
{
    public $timestamps = false;
    protected $table = 'admission';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
       
    ];
}
