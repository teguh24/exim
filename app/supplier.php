<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class supplier extends Model
{
    protected $fillable=['supplier'];
    public function imports()
    {
        return $this->belongsTo('App\import');
    }
}
