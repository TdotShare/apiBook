<?php

namespace App;


use Illuminate\Database\Eloquent\Model;


class Book extends Model 
{
    protected $table = 'book';
    protected $primaryKey = 'idbook';

    protected $fillable = [
        'name_th',
        'name_en',
        'category_name',
        'print_num',
        'print_year',
        'price',
        'kg',
        'idauthor',
        'idpublisher'
    ];

    //public $incrementing = false;
    
    public $timestamps = false;
    protected $keyType = 'int';
}
