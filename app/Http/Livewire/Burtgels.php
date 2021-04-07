<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class Burtgels extends Component
{
    use WithPagination;

    public $burtgel_id;
    public $isOpen = 0;
    public $perPage = 10;
    public $sortField = "id";
    public $sortAsc = false;
    public $search = '';
    public $shipper_name,$shipper_number,$shipper_address,$receiver_name,$receiver_number,$receiver_address,$description,$item_count,$weight,$is_delivery,$ship_price;
    // $payment_method, $kr_cash,$kr_bank_account,$kr_bank_detail,$kr_total,$mn_cash,$mn_bank_account,$mn_bank_detail,$mn_total,
    // $recieved_name,$recieved_phone,$recieved_description,$recieved_date,$is_active,$user_id,$customer_id,$step,$code

    protected $listeners = [ "deleteItem" => "delete_item" ];

    public function sortBy($field)
    {
        if ($this->sortField === $field) {
            $this->sortAsc = ! $this->sortAsc;
        } else {
            $this->sortAsc = true;
        }

        $this->sortField = $field;
    }

    public function delete_item ($id)
    {
        $data = Order::find($id);
        session()->flash('message', 'test устгагдлаа.');

        if (!$data) {
            $this->emit("deleteResult", [
                "status" => false,
                "message" => "Устгах мөр олдсонгүй!"
            ]);
            session()->flash('message', 'Устгах мөр олдсонгүй!');
            return;
        }

        $data::updateOrCreate(['id' => $id], [
            'is_active' => 0,
                'user_id' => Auth::user()->id,
                'step' => 0
            ]);
        $this->emit("deleteResult", [
            "status" => true,
            "message" => "Мөр амжилттай устгагдлаа!"
        ]);
        session()->flash('message', 'Мөр амжилттай устгагдлаа!');
    }

    public function render()
    {
        $orders = Order::search($this->search)
            ->orderBy($this->sortField, $this->sortAsc ? 'asc' : 'desc')
            ->paginate($this->perPage);

        return view('livewire.burtgels', [ 'orders' => $orders]);
    }

    public function create()
    {
        $this->resetInputFields();
        $this->openModal();
    }
   
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function openModal()
    {
        $this->isOpen = true;
    }
   
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function closeModal()
    {
        $this->isOpen = false;
    }
   
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    private function resetInputFields(){
        $this->shipper_name = '';
        $this->shipper_number = '';
        $this->shipper_address = '';
        $this->receiver_name = '';
        $this->receiver_number = '';
        $this->receiver_address = '';
        $this->description = '';
        $this->item_count = '';
        $this->weight = '';
        $this->is_delivery = '';
        $this->ship_price = '';
        $this->burtgel_id = '';
    }
      
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function store()
    {
        $this->validate([
            'shipper_name' => 'required',
            'shipper_number' => 'required',
            'receiver_name' => 'required',
            'receiver_number' => 'required',
            'description' => 'required',
            'item_count' => 'required',
            'weight' => 'required',
        ]);
        
        if($this->burtgel_id) {
            Order::updateOrCreate(['id' => $this->burtgel_id], [
                'shipper_name' => $this->shipper_name,
                'shipper_number' => $this->shipper_number,
                'shipper_address' => $this->shipper_address,
                'receiver_name' => $this->receiver_name,
                'receiver_number' => $this->receiver_number,
                'receiver_address' => $this->receiver_address,
                'description' => $this->description,
                'item_count' => $this->item_count,
                'weight' => $this->weight,
                'is_delivery' => $this->is_delivery,
                'ship_price' => $this->ship_price
            ]);
        } else {
            Order::create([
                'shipper_name' => $this->shipper_name,
                'shipper_number' => $this->shipper_number,
                'shipper_address' => $this->shipper_address,
                'receiver_name' => $this->receiver_name,
                'receiver_number' => $this->receiver_number,
                'receiver_address' => $this->receiver_address,
                'description' => $this->description,
                'item_count' => $this->item_count,
                'weight' => $this->weight,
                'is_delivery' => $this->is_delivery,
                'ship_price' => $this->ship_price,

                'is_active' => 1,
                'user_id' => Auth::user()->id,
                'step' => 1,
                'code' => uniqid('OC-')
            ]);
        }

   
        session()->flash('message', 
            $this->burtgel_id ? 'Амжилттай заслаа.' : 'Амжилттай үүсгэлээ.');
   
        $this->closeModal();
        $this->resetInputFields();
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function edit($id)
    {
        $order = Order::findOrFail($id);
        $this->burtgel_id = $id;
        $this->shipper_name = $order->shipper_name;
        $this->shipper_number = $order->shipper_number;
        $this->shipper_address = $order->shipper_address;
        $this->receiver_name = $order->receiver_name;
        $this->receiver_number = $order->receiver_number;
        $this->receiver_address = $order->receiver_address;
        $this->description = $order->description;
        $this->item_count = $order->item_count;
        $this->weight = $order->weight;
        $this->is_delivery = $order->is_delivery;
        $this->ship_price = $order->ship_price;
     
        $this->openModal();
    }

    public function delete($id)
    {
        Order::updateOrCreate(['id' => $id], [
            'is_active' => 0,
                'user_id' => Auth::user()->id,
                'step' => 0
            ]);
        session()->flash('message', 'Амжилттай устгагдлаа.');
    }
}
