<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Newsletters extends Model
{
    protected $connection = 'mysql';
    protected $primaryKey = 'name';
    protected $table = 'newletters';
    protected $fillable = array(
        'name',
        'email'
    );

    public $timestamps = true;
    //
}
