<?php

namespace App;


use Illuminate\Database\Eloquent\Model;


class Country extends Model 
{
    protected $table = 'country';
    protected $primaryKey = 'idcountry';

    //public $incrementing = false;
    protected $keyType = 'int';
}
