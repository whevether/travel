<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class GoodsImage extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [];

}