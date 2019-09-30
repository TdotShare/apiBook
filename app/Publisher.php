<?php

namespace App;


use Illuminate\Database\Eloquent\Model;


class Publisher extends Model 
{
    protected $table = 'publisher';
    protected $primaryKey = 'idpublisher';

    //public $incrementing = false;
    protected $keyType = 'int';
}
