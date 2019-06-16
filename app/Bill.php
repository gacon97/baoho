<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    const STATUS = [
        1 => 'Đã đặt hàng',
        2 => 'Đang giao hàng',
        3 => 'Đã giao hàng',
        4 => 'Đã thanh toán',
    ];
    protected $fillable = ['id', 'customer_id', 'date_order', 'total'];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function billdetail()
    {
        return $this->hasMany(BillDetail::class);
    }
}
