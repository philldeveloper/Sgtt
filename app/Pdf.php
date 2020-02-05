<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pdf extends Model
{
    protected $fillable = ['show_name', 'series', 'lead_actor'];
}
