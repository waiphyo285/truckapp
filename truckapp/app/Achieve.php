<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Achieve extends Model
{
    protected $fillable=['estimate_date','truckno','start_place','destinate_place','t_amount','g_amount','finish'];
}
