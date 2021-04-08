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
        'kr_bank',
        'kr_detail',
        'kr_total',
        'mn_cash',
        'mn_bank',
        'mn_detail',
        'mn_total',
        'recieved_name',
        'recieved_phone',
        'recieved_description',
        'recieved_date',
        'is_active',
        'user_id',
        'customer_id',
        'step',
        'total',


    ];



    public static function search($query,$filters)
    {
        return empty($query) ? static::where('is_active','!=',0)
                ->when($filters, function ($query1, $filters) {
                    return $query1->whereIn('step', $filters);
                })
            : static::where('is_active','!=',0)->when($filters, function ($query1, $filters) {
                return $query1->whereIn('step', $filters);
            })->where(function ($query2) use ($query) {
                    $query2->where('code', 'like', '%'.$query.'%')
                    ->orWhere('shipper_number', 'like', '%'.$query.'%')
                    ->orWhere('receiver_number', 'like', '%'.$query.'%');
                });
    }
}
