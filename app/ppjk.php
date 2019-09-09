<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ppjk extends Model
{
    protected $guarded=[];
    public function imports()
    {
        return $this->belongsTo('App\import');
    }
}
