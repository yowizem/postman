<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class todoModel extends Model
{
    //
    protected $fillable = [
        "author",
        "title",
        "description"
    ] ;
}
