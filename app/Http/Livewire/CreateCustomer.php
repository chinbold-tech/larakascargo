<?php

namespace App\Http\Livewire;

use App\Models\Customer;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class CreateCustomer extends Component
{
    public $customer;
    public $customerId;
    public $action;
    public $button;

    protected function getRules()
    {
        $rules = [
            'customer.firstname' => 'required',
            'customer.lastname' => 'required',
            'customer.number' => 'required|numeric|min:8',
            'customer.address' => 'required'
        ];

        return  $rules;
    }

    public function createCustomer ()
    {
        $this->resetErrorBag();
        $this->validate();


        Customer::create($this->customer);

        $this->emit('saved');
        $this->reset('customer');
    }

    public function updateCustomer ()
    {
        $this->resetErrorBag();
        $this->validate();

        Customer::query()
            ->where('id', $this->customerId)
            ->update($this->customer);

        $this->emit('saved');
    }

    public function mount ()
    {
        if (!!$this->customerId) {
            $customer = Customer::find($this->customerId);

            $this->customer = [
                "firstname" => $customer->firstname,
                "lastname" => $customer->lastname,
                "number" => $customer->number,
                "address" => $customer->address,
                "description" => $customer->description,
                "email" => $customer->email,
            ];
        }

        $this->button = create_button($this->action, "Customer");
    }

    public function render()
    {
        return view('livewire.create-customer');
    }
}
