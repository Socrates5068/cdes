<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $fillable = ['title', 'cover', 'description', 'category', 'filename'];
}
