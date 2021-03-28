<div>
    <x-data-table :data="$data" :model="$posts">
        <x-slot name="head">
            <tr>
                <th><a wire:click.prevent="sortBy('id')" role="button" href="#">
                    ID
                    @include('components.sort-icon', ['field' => 'id'])
                </a></th>
                <th><a wire:click.prevent="sortBy('title')" role="button" href="#">
                    Гарчиг
                    @include('components.sort-icon', ['field' => 'title'])
                </a></th> 
                <th><a wire:click.prevent="sortBy('created_at')" role="button" href="#">
                    Оруулсан хугацаа
                    @include('components.sort-icon', ['field' => 'created_at'])
                </a></th>
                <th>Үйлдэл</th>
            </tr>
        </x-slot>
        <x-slot name="body">
            @foreach ($posts as $post)
                <tr x-data="window.__controller.dataTableController({{ $post->id }})">
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->created_at->format('d M Y H:i') }}</td>
                    <td class="whitespace-no-wrap row-action--icon">
                        <a role="button" href="/post/edit/{{ $post->id }}" class="mr-3"><i class="fa fa-16px fa-pen"></i></a>
                        <a role="button" x-on:click.prevent="deleteItem" href="#"><i class="fa fa-16px fa-trash text-red-500"></i></a>
                    </td>
                </tr>
            @endforeach
        </x-slot>
    </x-data-table>
</div>
