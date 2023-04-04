<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model {

    use HasFactory;

    protected $fillable = ['user_id', 'status', 'ok', 'note', 'shipping','code'];
    protected $with = ['payment', 'items', 'address', 'delivery', 'user'];

    public function address() {
        return $this->hasOne(OrderAddress::class);
    }

    public function items() {
        return $this->hasMany(OrderDetail::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function payment() {
        return $this->hasOne(Payment::class);
    }

    public function delivery() {
        return $this->belongsTo(delivery::class);
    }

}
