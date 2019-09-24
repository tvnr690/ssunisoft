<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sub_category extends Model
{
    protected $fillable =  ['sub_cat_name', 'sub_cat_slug', 'cat_id'];
}
