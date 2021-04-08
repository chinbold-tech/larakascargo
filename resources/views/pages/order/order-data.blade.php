<x-app-layout>
    <x-slot name="header_content">
        <h1>{{ __('Карго бүртгэх') }}</h1>
    </x-slot>
    <div>
        <livewire:table.main name="order" :model="$order" />
    </div>
</x-app-layout>
