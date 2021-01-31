<div>
    <x-data-table :data="$data" :model="$customers">
        <x-slot name="head">
            <tr>
                <th><a wire:click.prevent="sortBy('id')" role="button" href="#">
                    ID
                    @include('components.sort-icon', ['field' => 'id'])
                </a></th>
                <th>
                    Firstname
                </th>
                <th><a wire:click.prevent="sortBy('lastname')" role="button" href="#">
                    LastName
                    @include('components.sort-icon', ['field' => 'name'])
                </a></th>
                <th>
                    Number
                   
                </th>
                <th>
                    Address
                 
                </th>
                <th>
                    Description
                   
                </th>
                <th>
                    Email
                </th>
                <th>
                    Time
                </th>
                <th>Action</th>
            </tr>
        </x-slot>
        <x-slot name="body">
            @foreach ($customers as $customer)
                <tr x-data="window.__controller.dataTableController({{ $customer->id }})">
                    <td>{{ $customer->id }}</td>
                    <td>{{ $customer->firstname }}</td>                    
                    <td>{{ $customer->lastname }}</td>
                    <td>{{ $customer->number }}</td>
                    <td>{{ $customer->address }}</td>                    
                    <td>{{ $customer->description }}</td>
                    <td>{{ $customer->email }}</td>
                    <td>{{ $customer->created_at->format('d M Y H:i') }}</td>
                    <td class="whitespace-no-wrap row-action--icon">
                        <a role="button" href="/customer/edit/{{ $customer->id }}" class="mr-3"><i class="fa fa-16px fa-pen"></i></a>
                        <a role="button" x-on:click.prevent="deleteItem" href="#"><i class="fa fa-16px fa-trash text-red-500"></i></a>
                    </td>
                </tr>
            @endforeach
        </x-slot>
    </x-data-table>
</div>
