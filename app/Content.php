<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    protected $connection = 'mysql';
    protected $primaryKey = 'id';
    protected $table = 'content';
    protected $fillable = array(


        'id',
        'title',
        'imagelink',
        'shorttext',
        'category'
    );

    public $timestamps = true;

    //
}
