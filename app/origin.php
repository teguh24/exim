<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class origin extends Model
{
    protected $fillable=['origin'];
    /**
     * The import that belong to the origin.
     */
    public function imports()
    {
        return $this->belongsTo('App\import');
    }
}
