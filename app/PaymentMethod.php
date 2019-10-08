<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaymentMethod extends Model
{
    public $timestamps = false;
    public function orders()
    {
        return $this->hasMany('App\Order');
    }
}
