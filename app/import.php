<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class import extends Model
{
    protected $guarded=[];
    /**
     * The import that belong to the origin.
     */
    public function origins()
    {
        return $this->hasMany('App\origin','id','origin_id');
    }
    public function ppjks()
    {
        return $this->hasMany('App\ppjk','id','ppjk_id');
    }
    public function suppliers()
    {
        return $this->hasMany('App\supplier','id','supplier_id');
    }
    public function currencys()
    {
        return $this->hasMany('App\currency','id','currency_id');
    }
}
