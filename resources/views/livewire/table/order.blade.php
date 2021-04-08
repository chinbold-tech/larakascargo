<div>
    <x-data-table :data="$data" :model="$orders">
        <x-slot name="head">
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
        </x-slot>
        <x-slot name="body">
            @foreach ($orders as $order)
                <tr x-data="window.__controller.dataTableController({{ $order->id }})">
                    <td>{{ $order->code }}</td>
                    <td>{{ $order->shipper_name }} / {{ $order->shipper_number }} / {{ $order->shipper_address }}</td>                    
                    <td>{{ $order->reciever_name }} / {{ $order->reciever_number }} / {{ $order->reciever_address }}</td>
                    <td>{{ $order->description }}</td>
                    <td>{{ $order->item_count }} / {{ $order->weight }}</td>                    
                    <td>{{ $order->is_delivery }}</td>
                    <td>{{ $cargo->is_active}}</td>
                    <td>{{ $order->created_at->format('d M Y H:i') }}</td>
                    <td class="whitespace-no-wrap row-action--icon">
                        <!-- <a role="button" href="/order/edit/{{ $order->id }}" class="mr-3"><i class="fa fa-16px fa-pen"></i></a>
                        <a role="button" x-on:click.prevent="deleteItem" href="#"><i class="fa fa-16px fa-trash text-red-500"></i></a> -->
                    </td>
                </tr>
            @endforeach
        </x-slot>
    </x-data-table>
</div>
