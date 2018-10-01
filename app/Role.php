<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{

    protected $fillable = ['name','body','soortwoning','gezinssituatie','ondernemer'];


}
