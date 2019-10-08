<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function statuses()
    {
        return $this->belongsTo('App\Status');
    }
    public function payment_methods()
    {
        return $this->belongsTo('App\PaymentMethod');
    }
    public function cities()
    {
        return $this->belongsTo('App\City');
    }
}
