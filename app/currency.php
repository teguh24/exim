<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class currency extends Model
{
    protected $fillable=['currency'];
    public function imports()
    {
        return $this->belongsTo('App\import');
    }
}
