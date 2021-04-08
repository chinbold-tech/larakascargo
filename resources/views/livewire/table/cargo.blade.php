<div>
    <x-data-table :model="$cargos">
        <x-slot name="head">
            <tr>
                <th><a wire:click.prevent="sortBy('code')" role="button" href="#">
                    CODE
                    @include('components.sort-icon', ['field' => 'code'])
                </a></th>
                <th>
                    Нэр
                </th>
                <th>
                    Утасны дугаар
                </th>
                <th>
                    Тайлбар
                </th>
                <th>
                    Тоо ширхэг / Жин
                </th>
                <th><a wire:click.prevent="sortBy('is_active')" role="button" href="#">
                    Статус
                    @include('components.sort-icon', ['field' => 'is_active'])
                </a></th>
                <th><a wire:click.prevent="sortBy('created_at')" role="button" href="#">
                    Огноо
                    @include('components.sort-icon', ['field' => 'created_at'])
                </a></th>
                <th>Үйлдэл</th>
            </tr>
        </x-slot>
        <x-slot name="body">
            @foreach ($cargos as $cargo)
                <tr x-data="window.__controller.dataTableController({{ $cargo->id }})">
                    <td>{{ $cargo->code }}</td>
                    <td>{{ $cargo->reciever_name }}</td>
                    <td>{{ $cargo->reciever_number }}</td>
                    <td>{{ $cargo->description }}</td>
                    <td>{{ $cargo->item_count }}/{{ $cargo->weight }}</td>
                    <td>{{ $cargo->is_active}}</td>
                    <td>{{ $cargo->created_at->format('d M Y H:i') }}</td>
                    <td class="whitespace-no-wrap row-action--icon">
                        <!-- <a role="button" href="/cargo/edit/{{ $cargo->id }}" class="mr-3"><i class="fa fa-16px fa-pen"></i></a>
                        <a role="button" x-on:click.prevent="deleteItem" href="#"><i class="fa fa-16px fa-trash text-red-500"></i></a> -->
                    </td>
                </tr>
            @endforeach
        </x-slot>
    </x-data-table>
</div>
