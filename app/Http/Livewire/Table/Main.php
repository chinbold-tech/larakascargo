<?php

namespace App\Http\Livewire\Table;

use Livewire\Component;
use Livewire\WithPagination;

class Main extends Component
{
    use WithPagination;

    public $model;
    public $name;
    public $perPage = 10;
    public $sortField = "id";
    public $sortAsc = false;
    public $search = '';

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

    public function get_pagination_data ()
    {
        switch ($this->name) {
            case 'user':
                $users = $this->model::search($this->search)
                    ->orderBy($this->sortField, $this->sortAsc ? 'asc' : 'desc')
                    ->paginate($this->perPage);

                return [
                    "view" => 'livewire.table.user',
                    "users" => $users,
                    "data" => array_to_object([
                        'href' => [
                            'create_new' => route('user.new'),
                            'create_new_text' => 'Buat User Baru',
                            'export' => '#',
                            'export_text' => 'Export'
                        ]
                    ])
                ];
                break;
            case 'customer':
                $customer = $this->model::search($this->search)
                    ->orderBy($this->sortField, $this->sortAsc ? 'asc' : 'desc')
                    ->paginate($this->perPage);

                return [
                    "view" => 'livewire.table.customer',
                    "customers" => $customer,
                    "data" => array_to_object([
                        'href' => [
                            'create_new' => route('customer.new'),
                            'create_new_text' => 'Шинэ хэрэглэгч нэмэх',
                            'export' => '#',
                            'export_text' => ' '
                        ]
                    ])
                ];
                break;
            case 'order':
                    $order = $this->model::search($this->search)
                        ->orderBy($this->sortField, $this->sortAsc ? 'asc' : 'desc')
                        ->paginate($this->perPage);
    
                    return [
                        "view" => 'livewire.table.order',
                        "orders" => $order,
                        "data" => array_to_object([
                            'href' => [
                                'create_new' => route('order.new'),
                                'create_new_text' => 'Шинэ карго бүртгэх',
                                'export' => '#',
                                'export_text' => ' '
                            ]
                        ])
                    ];
                    break;
            case 'post':
                $posts = $this->model::search($this->search)
                    ->orderBy($this->sortField, $this->sortAsc ? 'asc' : 'desc')
                    ->paginate($this->perPage);

                return [
                    "view" => 'livewire.table.post',
                    "posts" => $posts,
                    "data" => array_to_object([
                        'href' => [
                            'create_new' => route('post.new'),
                            'create_new_text' => 'Шинэ пост нэмэх',
                            'export' => '#',
                            'export_text' => ' '
                        ]
                    ])
                ];
                break;
            case 'cargo':
                $cargos = $this->model::search($this->search)
                    ->orderBy($this->sortField, $this->sortAsc ? 'asc' : 'desc')
                    ->paginate($this->perPage);

                return [
                    "view" => 'livewire.table.cargo',
                    "cargos" => $cargos,
                ];
                break;

            default:
                # code...
                break;
        }
            
        
    }

    public function delete_item ($id)
    {
        $data = $this->model::find($id);

        if (!$data) {
            $this->emit("deleteResult", [
                "status" => false,
                "message" => "Gagal menghapus data " . $this->name
            ]);
            return;
        }

        $data->delete();
        $this->emit("deleteResult", [
            "status" => true,
            "message" => "Data " . $this->name . " berhasil dihapus!"
        ]);
    }

    public function render()
    {
        $data = $this->get_pagination_data();

        return view($data['view'], $data);
    }
}
