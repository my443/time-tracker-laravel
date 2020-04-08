<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Timesheet extends Model
{
        protected $fillable = [
        'date', 'timestart', 'timeend', 'project', 'description'
    ];
}
