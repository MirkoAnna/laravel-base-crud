<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{

    protected $fillable  = ['title', 'thumb', 'description', 'series', 'price', 'sale_date', 'type'];

}
