<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShippingCompany extends Model
{
    public $timestamps = false;
    public function orders()
    {
        return $this->hasOne('App\Order');
    }
}
