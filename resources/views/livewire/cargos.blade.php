<x-app-layout>
    <x-slot name="header_content">
        <h1>{{ __('Карго олгох') }}</h1>
    </x-slot>

    <div>
        <livewire:table.main name="cargo" :model="$cargos" />
    </div>
</x-app-layout>