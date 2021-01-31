<?php

namespace App\Http\Livewire;

use App\Models\Order;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class CreateOrder extends Component
{
    public $order;
    public $orderId;
    public $action;
    public $button;

    protected function getRules()
    {
        $rules = [
            'order.shipper_name' => 'required',
            'order.shipper_number' => 'required|numeric|min:8',
            'order.receiver_name' => 'required',
            'order.receiver_number' => 'required',
            'order.description' => 'required',
            'order.item_count' => 'required',
            'order.weight' => 'required'
        ];

        return  $rules;
    }

    public function createOrder ()
    {
        $this->resetErrorBag();
        $this->validate();


        Order::create($this->order);

        $this->emit('saved');
        $this->reset('order');
    }

    public function updateOrder ()
    {
        $this->resetErrorBag();
        $this->validate();

        Order::query()
            ->where('id', $this->orderId)
            ->update($this->order);

        $this->emit('saved');
    }

    public function mount ()
    {
        if (!!$this->orderId) {
            $order = Order::find($this->orderId);

            $this->order = [
                "code" => $order->code,                
                "shipper_name" => $order->shipper_name,
                "shipper_number" => $order->shipper_number,
                "shipper_address" => $order->shipper_address,
                "reciever_name" => $order->reciever_name,
                "reciever_number" => $order->reciever_number,
                "reciever_address" => $order->reciever_address,
                "description" => $order->description,
                "item_count" => $order->item_count,                
                "weight" => $order->weight,                
                "is_delivery" => $order->is_delivery,
                "ship_price" => $order->ship_price,
                "payment_method" => $order->payment_method,
                "ship_status" => $order->ship_status,
                "shipping_box" => $order->shipping_box,
                "shipping_date" => $order->shipping_date,
                "kr_cash" => $order->kr_cash,
                "kr_bank_account" => $order->kr_bank_account,
                "kr_bank_detail" => $order->kr_bank_detail,
                "kr_total" => $order->kr_total,
                "mn_cash" => $order->mn_cash,
                "mn_bank_account" => $order->mn_bank_account,
                "mn_bank_detail" => $order->mn_bank_detail,
                "mn_total" => $order->mn_total,
                "recieved_name" => $order->recieved_name,
                "recieved_phone" => $order->recieved_phone,
                "recieved_description" => $order->recieved_description,
                "recieved_date" => $order->recieved_date,
                "is_active" => $order->is_active,
                "user_id" => $order->user_id,
                "customer_id" => $order->customer_id,

            ];
        }

        $this->button = create_button($this->action, "Order");
    }

    public function render()
    {
        return view('livewire.create-order');
    }
}
