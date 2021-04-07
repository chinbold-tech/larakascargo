<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'shipper_name',
        'shipper_number',
        'shipper_address',
        'receiver_name',
        'receiver_number',
        'receiver_address',
        'description',
        'item_count',
        'weight',
        'is_delivery',
        'ship_price',
        'payment_method',
        'ship_status',
        'shipping_box',
        'shipping_date',
        'kr_cash',
        'kr_bank_account',
        'kr_bank_detail',
        'kr_total',
        'mn_cash',
        'mn_bank_account',
        'mn_bank_detail',
        'mn_total',
        'recieved_name',
        'recieved_phone',
        'recieved_description',
        'recieved_date',
        'is_active',
        'user_id',
        'customer_id',


    ];



    public static function search($query)
    {
        return empty($query) ? static::where('is_active','!=',0)
            : static::where('code', 'like', '%'.$query.'%')
                ->orWhere('shipper_number', 'like', '%'.$query.'%')
                ->orWhere('receiver_number', 'like', '%'.$query.'%');
    }
}
