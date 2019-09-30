<?php

namespace App;


use Illuminate\Database\Eloquent\Model;


class Author extends Model 
{
    protected $table = 'author';
    protected $primaryKey = 'idauthor';

    //public $incrementing = false;
    protected $keyType = 'int';
}
