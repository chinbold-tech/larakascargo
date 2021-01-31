<div>
    <x-data-table :data="$data" :model="$orders">
        <x-slot name="head">
            <tr>
                <th><a wire:click.prevent="sortBy('id')" role="button" href="#">
                    ID
                    @include('components.sort-icon', ['field' => 'id'])
                </a></th>
                <th>
                    Code
                </th>
                <th><a wire:click.prevent="sortBy('lastname')" role="button" href="#">
                    ShipperName
                    @include('components.sort-icon', ['field' => 'name'])
                </a></th>
                <th>
                    ShipperNumber
                   
                </th>
                <th>
                    ShipperAddress
                 
                </th>
                <th>
                    Description
                   
                </th>
                <th>
                    Weight
                </th>
                <th>
                    Time
                </th>
                <th>Action</th>
            </tr>
        </x-slot>
        <x-slot name="body">
            @foreach ($orders as $order)
                <tr x-data="window.__controller.dataTableController({{ $order->id }})">
                    <td>{{ $order->id }}</td>
                    <td>{{ $order->code }}</td>                    
                    <td>{{ $order->shipper_name }}</td>
                    <td>{{ $order->shipper_number }}</td>
                    <td>{{ $order->shipper_address }}</td>                    
                    <td>{{ $order->description }}</td>
                    <td>{{ $order->weight }}</td>
                    <td>{{ $order->created_at->format('d M Y H:i') }}</td>
                    <td class="whitespace-no-wrap row-action--icon">
                        <a role="button" href="/order/edit/{{ $order->id }}" class="mr-3"><i class="fa fa-16px fa-pen"></i></a>
                        <a role="button" x-on:click.prevent="deleteItem" href="#"><i class="fa fa-16px fa-trash text-red-500"></i></a>
                    </td>
                </tr>
            @endforeach
        </x-slot>
    </x-data-table>
</div>
