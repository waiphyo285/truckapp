<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Infotrucks extends Model
{
    protected $fillable=['pname','address','contact','truckno','color','wheels','place','booking','present','curid','curdate'];
}
