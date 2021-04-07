<x-slot name="header_content">
    <h1>{{ __('Карго бүртгэх') }}</h1>
</x-slot>
<div>
    @if($isOpen)
    @include('livewire.burtgels-create')
    @endif
    <div class="bg-gray-100 text-gray-900 tracking-wider leading-normal">
        @if (session()->has('message'))
        <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md my-3"
            role="alert">
            <div class="flex">
                <div>
                    <p class="text-sm">{{ session('message') }}</p>
                </div>
            </div>
        </div>
        @endif
        <div class="p-8 pt-4 mt-2 bg-white" x-data="window.__controller.dataTableMainController()"
            x-init="setCallback();">
            <div class="flex pb-4 -ml-3">
                <a wire:click="create()" class="-ml- btn btn-primary shadow-none">
                    <span class="fas fa-plus"></span> Шинэ карго бүртгэх
                </a>
            </div>

            <div class="row mb-4">
                <div class="col form-inline">
                    Хуудаслалт: &nbsp;
                    <select wire:model="perPage" class="form-control">
                        <option>10</option>
                        <option>15</option>
                        <option>25</option>
                    </select>
                </div>

                <div class="col">
                    <input wire:model="search" class="form-control" type="text"
                        placeholder="Code, утасны дугаараар хайх...">
                </div>
            </div>

            <div class="row">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped text-sm text-gray-600">
                        <thead>
                            <tr>
                                <th><a wire:click.prevent="sortBy('code')" role="button" href="#">
                                        Code
                                        @include('components.sort-icon', ['field' => 'code'])
                                    </a></th>
                                <th>
                                    Илгээгч
                                </th>
                                <th>
                                    Хүлээн авагч

                                </th>
                                <th>
                                    Тайлбар
                                </th>
                                <th>
                                    Тоо ширхэг / Жин

                                </th>
                                <th>
                                    Үнийн дүн
                                </th>
                                <th>
                                    Хүргэлт
                                </th>
                                <th><a wire:click.prevent="sortBy('is_active')" role="button" href="#">
                                        Статус
                                        @include('components.sort-icon', ['field' => 'is_active'])
                                    </a></th>
                                <th><a wire:click.prevent="sortBy('created_at')" role="button" href="#">
                                        Огноо
                                        @include('components.sort-icon', ['field' => 'created_at'])
                                    </a></th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($orders as $order)
                            <tr x-data="window.__controller.dataTableController({{ $order->id }})">
                                <td>{{ $order->code }}</td>
                                <td>{{ $order->shipper_name }} / {{ $order->shipper_number }}</td>
                                <td>{{ $order->receiver_name }} / {{ $order->receiver_number }}</td>
                                <td>{{ $order->description }}</td>
                                <td>{{ $order->item_count }} / {{ $order->weight }}</td>
                                <td>{{ $order->ship_price }}</td>
                                <td>{{ $order->is_delivery }}</td>
                                <td>{{ $order->is_active}}</td>
                                <td>{{ $order->created_at->format('d M Y H:i') }}</td>
                                <td class="whitespace-no-wrap row-action--icon">
                                    <a role="button" wire:click="edit({{ $order->id }})" class="mr-3"><i
                                            class="fa fa-16px fa-pen"></i></a>
                                    <a role="button" x-on:click.prevent="deleteItem" href="#"><i
                                            class="fa fa-16px fa-trash text-red-500"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <div id="table_pagination" class="py-3">
                {{ $orders->onEachSide(1)->links() }}
            </div>
        </div>
    </div>
</div>